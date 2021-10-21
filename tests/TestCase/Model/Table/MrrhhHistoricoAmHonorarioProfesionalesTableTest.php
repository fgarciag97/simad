<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoAmHonorarioProfesionalesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoAmHonorarioProfesionalesTable Test Case
 */
class MrrhhHistoricoAmHonorarioProfesionalesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoAmHonorarioProfesionalesTable
     */
    public $MrrhhHistoricoAmHonorarioProfesionales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoAmHonorarioProfesionales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoAmHonorarioProfesionales') ? [] : ['className' => MrrhhHistoricoAmHonorarioProfesionalesTable::class];
        $this->MrrhhHistoricoAmHonorarioProfesionales = TableRegistry::getTableLocator()->get('MrrhhHistoricoAmHonorarioProfesionales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoAmHonorarioProfesionales);

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
