<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoRetroactivoNominaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoRetroactivoNominaTable Test Case
 */
class MrrhhHistoricoRetroactivoNominaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoRetroactivoNominaTable
     */
    public $MrrhhHistoricoRetroactivoNomina;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoRetroactivoNomina'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoRetroactivoNomina') ? [] : ['className' => MrrhhHistoricoRetroactivoNominaTable::class];
        $this->MrrhhHistoricoRetroactivoNomina = TableRegistry::getTableLocator()->get('MrrhhHistoricoRetroactivoNomina', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoRetroactivoNomina);

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
