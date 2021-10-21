<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhCargosDirectivosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhCargosDirectivosTable Test Case
 */
class MrrhhCargosDirectivosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhCargosDirectivosTable
     */
    public $MrrhhCargosDirectivos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhCargosDirectivos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhCargosDirectivos') ? [] : ['className' => MrrhhCargosDirectivosTable::class];
        $this->MrrhhCargosDirectivos = TableRegistry::getTableLocator()->get('MrrhhCargosDirectivos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhCargosDirectivos);

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
