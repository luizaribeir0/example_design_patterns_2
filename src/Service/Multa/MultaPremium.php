<?php

namespace App\Service\Multa;

use App\Model\Entity\Emprestimo;

class MultaPremium implements MultaStrategyInterface
{
    public function calcular(Emprestimo $emprestimo): float
    {
        $hoje = new \DateTime();
        $prevista = new \DateTime($emprestimo->data_prevista);
        $dias = $hoje > $prevista ? $hoje->diff($prevista)->days : 0;
        return $dias * 1.0; // R$ 1,00/dia
    }
}
