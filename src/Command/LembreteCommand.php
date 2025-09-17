<?php

namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\ORM\TableRegistry;

class LembreteCommand extends Command
{
    public function execute(Arguments $args, ConsoleIo $io)
    {
        $emprestimos = TableRegistry::getTableLocator()->get('Emprestimos')
            ->find()
            ->where(['data_prevista <=' => date('Y-m-d'), 'status' => 'aberto']);

        foreach ($emprestimos as $e) {
            $io->out("Enviar lembrete para: {$e->usuario_email}, livro: {$e->livro_titulo}");
            $emailAdapter = new \App\Service\Email\EmailSimulado();
            $emailAdapter->send($e->usuario_email, 'Lembrete de devolução', 'Por favor devolva o livro...');
        }
    }
}
