<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistBeObrerosPensionadosSobrevivientesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistBeObrerosPensionadosSobrevivientesTable Test Case
 */
class MrrhhHistBeObrerosPensionadosSobrevivientesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistBeObrerosPensionadosSobrevivientesTable
     */
    public $MrrhhHistBeObrerosPensionadosSobrevivientes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistBeObrerosPensionadosSobrevivientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistBeObrerosPensionadosSobrevivientes') ? [] : ['className' => MrrhhHistBeObrerosPensionadosSobrevivientesTable::class];
        $this->MrrhhHistBeObrerosPensionadosSobrevivientes = TableRegistry::getTableLocator()->get('MrrhhHistBeObrerosPensionadosSobrevivientes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistBeObrerosPensionadosSobrevivientes);

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
