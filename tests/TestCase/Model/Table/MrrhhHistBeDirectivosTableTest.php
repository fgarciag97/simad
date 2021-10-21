<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistBeDirectivosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistBeDirectivosTable Test Case
 */
class MrrhhHistBeDirectivosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistBeDirectivosTable
     */
    public $MrrhhHistBeDirectivos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistBeDirectivos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistBeDirectivos') ? [] : ['className' => MrrhhHistBeDirectivosTable::class];
        $this->MrrhhHistBeDirectivos = TableRegistry::getTableLocator()->get('MrrhhHistBeDirectivos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistBeDirectivos);

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
