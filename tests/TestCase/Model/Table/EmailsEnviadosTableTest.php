<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmailsEnviadosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmailsEnviadosTable Test Case
 */
class EmailsEnviadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmailsEnviadosTable
     */
    protected $EmailsEnviados;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.EmailsEnviados',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EmailsEnviados') ? [] : ['className' => EmailsEnviadosTable::class];
        $this->EmailsEnviados = $this->getTableLocator()->get('EmailsEnviados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->EmailsEnviados);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\EmailsEnviadosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
