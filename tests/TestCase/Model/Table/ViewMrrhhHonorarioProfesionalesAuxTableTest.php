<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHonorarioProfesionalesAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHonorarioProfesionalesAuxTable Test Case
 */
class ViewMrrhhHonorarioProfesionalesAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHonorarioProfesionalesAuxTable
     */
    public $ViewMrrhhHonorarioProfesionalesAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHonorarioProfesionalesAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHonorarioProfesionalesAux') ? [] : ['className' => ViewMrrhhHonorarioProfesionalesAuxTable::class];
        $this->ViewMrrhhHonorarioProfesionalesAux = TableRegistry::getTableLocator()->get('ViewMrrhhHonorarioProfesionalesAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHonorarioProfesionalesAux);

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
