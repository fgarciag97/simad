<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHonorarioPTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHonorarioPTable Test Case
 */
class ViewMrrhhHonorarioPTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHonorarioPTable
     */
    public $ViewMrrhhHonorarioP;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHonorarioP'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHonorarioP') ? [] : ['className' => ViewMrrhhHonorarioPTable::class];
        $this->ViewMrrhhHonorarioP = TableRegistry::getTableLocator()->get('ViewMrrhhHonorarioP', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHonorarioP);

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
