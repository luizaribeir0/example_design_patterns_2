<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogsEventosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogsEventosTable Test Case
 */
class LogsEventosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LogsEventosTable
     */
    protected $LogsEventos;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.LogsEventos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LogsEventos') ? [] : ['className' => LogsEventosTable::class];
        $this->LogsEventos = $this->getTableLocator()->get('LogsEventos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->LogsEventos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\LogsEventosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
