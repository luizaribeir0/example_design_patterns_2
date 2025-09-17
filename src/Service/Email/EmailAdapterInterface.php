<?php

namespace App\Service\Email;

interface EmailAdapterInterface
{
    public function send(string $to, string $subject, string $message): bool;
}
