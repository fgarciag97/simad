<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHonorarioProfesionalesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHonorarioProfesionalesTable Test Case
 */
class ViewMrrhhHonorarioProfesionalesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHonorarioProfesionalesTable
     */
    public $ViewMrrhhHonorarioProfesionales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHonorarioProfesionales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHonorarioProfesionales') ? [] : ['className' => ViewMrrhhHonorarioProfesionalesTable::class];
        $this->ViewMrrhhHonorarioProfesionales = TableRegistry::getTableLocator()->get('ViewMrrhhHonorarioProfesionales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHonorarioProfesionales);

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
