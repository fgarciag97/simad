<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHistoricoHonorarioProfesionalesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHistoricoHonorarioProfesionalesTable Test Case
 */
class ViewMrrhhHistoricoHonorarioProfesionalesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHistoricoHonorarioProfesionalesTable
     */
    public $ViewMrrhhHistoricoHonorarioProfesionales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHistoricoHonorarioProfesionales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHistoricoHonorarioProfesionales') ? [] : ['className' => ViewMrrhhHistoricoHonorarioProfesionalesTable::class];
        $this->ViewMrrhhHistoricoHonorarioProfesionales = TableRegistry::getTableLocator()->get('ViewMrrhhHistoricoHonorarioProfesionales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHistoricoHonorarioProfesionales);

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
