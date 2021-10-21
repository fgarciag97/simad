<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhPrestacionesSocialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhPrestacionesSocialesTable Test Case
 */
class MrrhhPrestacionesSocialesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhPrestacionesSocialesTable
     */
    public $MrrhhPrestacionesSociales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhPrestacionesSociales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhPrestacionesSociales') ? [] : ['className' => MrrhhPrestacionesSocialesTable::class];
        $this->MrrhhPrestacionesSociales = TableRegistry::getTableLocator()->get('MrrhhPrestacionesSociales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhPrestacionesSociales);

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
