<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LogsEventos Controller
 *
 * @property \App\Model\Table\LogsEventosTable $LogsEventos
 */
class LogsEventosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->LogsEventos->find();
        $logsEventos = $this->paginate($query);

        $this->set(compact('logsEventos'));
    }

    /**
     * View method
     *
     * @param string|null $id Logs Evento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $logsEvento = $this->LogsEventos->get($id, contain: []);
        $this->set(compact('logsEvento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $logsEvento = $this->LogsEventos->newEmptyEntity();
        if ($this->request->is('post')) {
            $logsEvento = $this->LogsEventos->patchEntity($logsEvento, $this->request->getData());
            if ($this->LogsEventos->save($logsEvento)) {
                $this->Flash->success(__('The logs evento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logs evento could not be saved. Please, try again.'));
        }
        $this->set(compact('logsEvento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Logs Evento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $logsEvento = $this->LogsEventos->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $logsEvento = $this->LogsEventos->patchEntity($logsEvento, $this->request->getData());
            if ($this->LogsEventos->save($logsEvento)) {
                $this->Flash->success(__('The logs evento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logs evento could not be saved. Please, try again.'));
        }
        $this->set(compact('logsEvento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Logs Evento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $logsEvento = $this->LogsEventos->get($id);
        if ($this->LogsEventos->delete($logsEvento)) {
            $this->Flash->success(__('The logs evento has been deleted.'));
        } else {
            $this->Flash->error(__('The logs evento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
