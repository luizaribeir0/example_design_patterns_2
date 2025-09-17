<?php
declare(strict_types=1);

namespace App\Controller;

use App\Service\Multa\MultaPadrao;
use App\Service\Multa\MultaPremium;
use App\Service\Email\EmailSimulado;
use Cake\I18n\FrozenDate;

class EmprestimosController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
    }

    public function index()
    {
        $emprestimos = $this->paginate($this->Emprestimos->find());
        $this->set(compact('emprestimos'));
    }

    public function view($id = null)
    {
        $emprestimo = $this->Emprestimos->get($id);
        $this->set(compact('emprestimo'));
    }

    public function add()
    {
        $emprestimo = $this->Emprestimos->newEmptyEntity();

        if ($this->request->is('post')) {
            $emprestimo = $this->Emprestimos->patchEntity($emprestimo, $this->request->getData());

            // Strategy dinâmico
            $dataEmprestimo = new FrozenDate($emprestimo->data_emprestimo);
            $dataPrevista   = new FrozenDate($emprestimo->data_prevista);
            $diasDiferenca  = $dataPrevista->diffInDays($dataEmprestimo);

            $multaStrategy = ($diasDiferenca > 7) ? new MultaPremium() : new MultaPadrao();
            $emprestimo->valor_multa = $multaStrategy->calcular($emprestimo);
            $emprestimo->status = 'aberto';

            if ($this->Emprestimos->save($emprestimo)) {
                // Adapter - enviar e-mail (simulado)
                $emailAdapter = new EmailSimulado();
                $emailAdapter->send(
                    $emprestimo->usuario_email,
                    'Confirmação de empréstimo',
                    "Você realizou o empréstimo do livro: {$emprestimo->livro_titulo}. Data prevista: {$emprestimo->data_prevista}"
                );

                // Observer - disparar evento para logs
                $this->getEventManager()->dispatch(new \Cake\Event\Event(
                    'Emprestimos.afterSave',
                    $this,
                    ['emprestimo' => $emprestimo]
                ));

                $this->Flash->success(__('Empréstimo criado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao criar empréstimo.'));
        }

        $this->set(compact('emprestimo'));
    }

    public function edit($id = null)
    {
        $emprestimo = $this->Emprestimos->get($id);

        if ($this->request->is(['post', 'put', 'patch'])) {
            $emprestimo = $this->Emprestimos->patchEntity($emprestimo, $this->request->getData());

            // Strategy dinâmico
            $dataEmprestimo = new FrozenDate($emprestimo->data_emprestimo);
            $dataPrevista   = new FrozenDate($emprestimo->data_prevista);
            $diasDiferenca  = $dataPrevista->diffInDays($dataEmprestimo);

            $multaStrategy = ($diasDiferenca > 7) ? new MultaPremium() : new MultaPadrao();
            $emprestimo->valor_multa = $multaStrategy->calcular($emprestimo);

            if ($this->Emprestimos->save($emprestimo)) {
                $this->Flash->success(__('Empréstimo atualizado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao atualizar empréstimo.'));
        }

        $this->set(compact('emprestimo'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emprestimo = $this->Emprestimos->get($id);

        if ($this->Emprestimos->delete($emprestimo)) {
            $this->Flash->success(__('Empréstimo removido.'));
        } else {
            $this->Flash->error(__('Erro ao remover empréstimo.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
