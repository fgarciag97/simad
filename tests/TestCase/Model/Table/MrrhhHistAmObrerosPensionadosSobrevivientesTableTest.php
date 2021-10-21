<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistAmObrerosPensionadosSobrevivientesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistAmObrerosPensionadosSobrevivientesTable Test Case
 */
class MrrhhHistAmObrerosPensionadosSobrevivientesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistAmObrerosPensionadosSobrevivientesTable
     */
    public $MrrhhHistAmObrerosPensionadosSobrevivientes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistAmObrerosPensionadosSobrevivientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistAmObrerosPensionadosSobrevivientes') ? [] : ['className' => MrrhhHistAmObrerosPensionadosSobrevivientesTable::class];
        $this->MrrhhHistAmObrerosPensionadosSobrevivientes = TableRegistry::getTableLocator()->get('MrrhhHistAmObrerosPensionadosSobrevivientes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistAmObrerosPensionadosSobrevivientes);

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
