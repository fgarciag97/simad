<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoBeObrerosPensionadosSobrevivientesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoBeObrerosPensionadosSobrevivientesTable Test Case
 */
class MrrhhHistoricoBeObrerosPensionadosSobrevivientesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoBeObrerosPensionadosSobrevivientesTable
     */
    public $MrrhhHistoricoBeObrerosPensionadosSobrevivientes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoBeObrerosPensionadosSobrevivientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoBeObrerosPensionadosSobrevivientes') ? [] : ['className' => MrrhhHistoricoBeObrerosPensionadosSobrevivientesTable::class];
        $this->MrrhhHistoricoBeObrerosPensionadosSobrevivientes = TableRegistry::getTableLocator()->get('MrrhhHistoricoBeObrerosPensionadosSobrevivientes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoBeObrerosPensionadosSobrevivientes);

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
