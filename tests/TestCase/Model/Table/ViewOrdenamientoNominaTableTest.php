<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewOrdenamientoNominaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewOrdenamientoNominaTable Test Case
 */
class ViewOrdenamientoNominaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewOrdenamientoNominaTable
     */
    public $ViewOrdenamientoNomina;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewOrdenamientoNomina'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewOrdenamientoNomina') ? [] : ['className' => ViewOrdenamientoNominaTable::class];
        $this->ViewOrdenamientoNomina = TableRegistry::getTableLocator()->get('ViewOrdenamientoNomina', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewOrdenamientoNomina);

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
