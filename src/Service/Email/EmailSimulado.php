<?php

namespace App\Service\Email;

use App\Model\Table\EmailsEnviadosTable;
use Cake\ORM\TableRegistry;

class EmailSimulado implements EmailAdapterInterface
{
    public function send(string $to, string $subject, string $message): bool
    {
        /** @var EmailsEnviadosTable $table */
        $table = TableRegistry::getTableLocator()->get('EmailsEnviados');

        $email = $table->newEmptyEntity();
        $email->destinatario = $to;
        $email->assunto = $subject;
        $email->mensagem = $message;
        $email->provider = 'simulado';
        $table->save($email);
        return true;
    }
}
