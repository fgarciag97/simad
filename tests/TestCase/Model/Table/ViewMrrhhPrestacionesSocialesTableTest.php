<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhPrestacionesSocialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhPrestacionesSocialesTable Test Case
 */
class ViewMrrhhPrestacionesSocialesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhPrestacionesSocialesTable
     */
    public $ViewMrrhhPrestacionesSociales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhPrestacionesSociales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhPrestacionesSociales') ? [] : ['className' => ViewMrrhhPrestacionesSocialesTable::class];
        $this->ViewMrrhhPrestacionesSociales = TableRegistry::getTableLocator()->get('ViewMrrhhPrestacionesSociales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhPrestacionesSociales);

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
