<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoHonorarioProfesionalesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoHonorarioProfesionalesTable Test Case
 */
class MrrhhHistoricoHonorarioProfesionalesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoHonorarioProfesionalesTable
     */
    public $MrrhhHistoricoHonorarioProfesionales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoHonorarioProfesionales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoHonorarioProfesionales') ? [] : ['className' => MrrhhHistoricoHonorarioProfesionalesTable::class];
        $this->MrrhhHistoricoHonorarioProfesionales = TableRegistry::getTableLocator()->get('MrrhhHistoricoHonorarioProfesionales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoHonorarioProfesionales);

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
