<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHistBeDirectivosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHistBeDirectivosTable Test Case
 */
class ViewMrrhhHistBeDirectivosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHistBeDirectivosTable
     */
    public $ViewMrrhhHistBeDirectivos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHistBeDirectivos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHistBeDirectivos') ? [] : ['className' => ViewMrrhhHistBeDirectivosTable::class];
        $this->ViewMrrhhHistBeDirectivos = TableRegistry::getTableLocator()->get('ViewMrrhhHistBeDirectivos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHistBeDirectivos);

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
