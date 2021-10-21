<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoBeHonorarioProfesionalesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoBeHonorarioProfesionalesTable Test Case
 */
class MrrhhHistoricoBeHonorarioProfesionalesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoBeHonorarioProfesionalesTable
     */
    public $MrrhhHistoricoBeHonorarioProfesionales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoBeHonorarioProfesionales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoBeHonorarioProfesionales') ? [] : ['className' => MrrhhHistoricoBeHonorarioProfesionalesTable::class];
        $this->MrrhhHistoricoBeHonorarioProfesionales = TableRegistry::getTableLocator()->get('MrrhhHistoricoBeHonorarioProfesionales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoBeHonorarioProfesionales);

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
