<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoObrerosPensionadosSobrevivientesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoObrerosPensionadosSobrevivientesTable Test Case
 */
class MrrhhHistoricoObrerosPensionadosSobrevivientesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoObrerosPensionadosSobrevivientesTable
     */
    public $MrrhhHistoricoObrerosPensionadosSobrevivientes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoObrerosPensionadosSobrevivientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoObrerosPensionadosSobrevivientes') ? [] : ['className' => MrrhhHistoricoObrerosPensionadosSobrevivientesTable::class];
        $this->MrrhhHistoricoObrerosPensionadosSobrevivientes = TableRegistry::getTableLocator()->get('MrrhhHistoricoObrerosPensionadosSobrevivientes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoObrerosPensionadosSobrevivientes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
