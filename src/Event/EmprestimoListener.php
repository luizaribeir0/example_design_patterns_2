<?php

namespace App\Event;

use App\Model\Table\LogsEventosTable;
use Cake\Event\EventListenerInterface;
use Cake\ORM\TableRegistry;

class EmprestimoListener implements EventListenerInterface
{
    public function implementedEvents(): array
    {
        return [
            'Emprestimos.afterSave' => 'registrarLog'
        ];
    }

    public function registrarLog($event)
    {
        $emprestimo = $event->getData('emprestimo');

        /** @var LogsEventosTable $logsTable */
        $logsTable = TableRegistry::getTableLocator()->get('LogsEventos');

        $log = $logsTable->newEmptyEntity();
        $log->descricao = "Empréstimo ID {$emprestimo->id} criado para {$emprestimo->usuario_email}";
        $log->evento = 'Novo empréstimo';
        $logsTable->save($log);
    }
}
