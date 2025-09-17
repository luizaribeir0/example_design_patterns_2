<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmprestimosFixture
 */
class EmprestimosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'livro_titulo' => 'Lorem ipsum dolor sit amet',
                'usuario_email' => 'Lorem ipsum dolor sit amet',
                'data_emprestimo' => '2025-09-17',
                'data_prevista' => '2025-09-17',
                'data_devolucao' => '2025-09-17',
                'valor_multa' => 1.5,
                'status' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-09-17 01:05:59',
                'modified' => '2025-09-17 01:05:59',
            ],
        ];
        parent::init();
    }
}
