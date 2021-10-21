<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhBonoEstabilidadEconomicaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhBonoEstabilidadEconomicaTable Test Case
 */
class MrrhhBonoEstabilidadEconomicaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhBonoEstabilidadEconomicaTable
     */
    public $MrrhhBonoEstabilidadEconomica;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhBonoEstabilidadEconomica'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhBonoEstabilidadEconomica') ? [] : ['className' => MrrhhBonoEstabilidadEconomicaTable::class];
        $this->MrrhhBonoEstabilidadEconomica = TableRegistry::getTableLocator()->get('MrrhhBonoEstabilidadEconomica', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhBonoEstabilidadEconomica);

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
