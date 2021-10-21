<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhTipoNominaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhTipoNominaTable Test Case
 */
class MrrhhTipoNominaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhTipoNominaTable
     */
    public $MrrhhTipoNomina;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhTipoNomina'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhTipoNomina') ? [] : ['className' => MrrhhTipoNominaTable::class];
        $this->MrrhhTipoNomina = TableRegistry::getTableLocator()->get('MrrhhTipoNomina', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhTipoNomina);

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
