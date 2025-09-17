<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EmailsEnviados Controller
 *
 * @property \App\Model\Table\EmailsEnviadosTable $EmailsEnviados
 */
class EmailsEnviadosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->EmailsEnviados->find();
        $emailsEnviados = $this->paginate($query);

        $this->set(compact('emailsEnviados'));
    }

    /**
     * View method
     *
     * @param string|null $id Emails Enviado id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emailsEnviado = $this->EmailsEnviados->get($id, contain: []);
        $this->set(compact('emailsEnviado'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emailsEnviado = $this->EmailsEnviados->newEmptyEntity();
        if ($this->request->is('post')) {
            $emailsEnviado = $this->EmailsEnviados->patchEntity($emailsEnviado, $this->request->getData());
            if ($this->EmailsEnviados->save($emailsEnviado)) {
                $this->Flash->success(__('The emails enviado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emails enviado could not be saved. Please, try again.'));
        }
        $this->set(compact('emailsEnviado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Emails Enviado id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emailsEnviado = $this->EmailsEnviados->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emailsEnviado = $this->EmailsEnviados->patchEntity($emailsEnviado, $this->request->getData());
            if ($this->EmailsEnviados->save($emailsEnviado)) {
                $this->Flash->success(__('The emails enviado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emails enviado could not be saved. Please, try again.'));
        }
        $this->set(compact('emailsEnviado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Emails Enviado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emailsEnviado = $this->EmailsEnviados->get($id);
        if ($this->EmailsEnviados->delete($emailsEnviado)) {
            $this->Flash->success(__('The emails enviado has been deleted.'));
        } else {
            $this->Flash->error(__('The emails enviado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
