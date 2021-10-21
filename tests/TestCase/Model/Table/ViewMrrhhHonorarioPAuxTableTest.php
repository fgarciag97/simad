<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHonorarioPAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHonorarioPAuxTable Test Case
 */
class ViewMrrhhHonorarioPAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHonorarioPAuxTable
     */
    public $ViewMrrhhHonorarioPAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHonorarioPAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHonorarioPAux') ? [] : ['className' => ViewMrrhhHonorarioPAuxTable::class];
        $this->ViewMrrhhHonorarioPAux = TableRegistry::getTableLocator()->get('ViewMrrhhHonorarioPAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHonorarioPAux);

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
