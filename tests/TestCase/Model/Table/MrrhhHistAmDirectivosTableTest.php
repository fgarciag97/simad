<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistAmDirectivosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistAmDirectivosTable Test Case
 */
class MrrhhHistAmDirectivosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistAmDirectivosTable
     */
    public $MrrhhHistAmDirectivos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistAmDirectivos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistAmDirectivos') ? [] : ['className' => MrrhhHistAmDirectivosTable::class];
        $this->MrrhhHistAmDirectivos = TableRegistry::getTableLocator()->get('MrrhhHistAmDirectivos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistAmDirectivos);

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
