<?php

namespace App\Service\Multa;

use App\Model\Entity\Emprestimo;

interface MultaStrategyInterface
{
    public function calcular(Emprestimo $emprestimo): float;
}
