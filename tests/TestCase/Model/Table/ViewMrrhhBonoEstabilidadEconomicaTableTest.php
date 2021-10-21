<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhBonoEstabilidadEconomicaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhBonoEstabilidadEconomicaTable Test Case
 */
class ViewMrrhhBonoEstabilidadEconomicaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhBonoEstabilidadEconomicaTable
     */
    public $ViewMrrhhBonoEstabilidadEconomica;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhBonoEstabilidadEconomica'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhBonoEstabilidadEconomica') ? [] : ['className' => ViewMrrhhBonoEstabilidadEconomicaTable::class];
        $this->ViewMrrhhBonoEstabilidadEconomica = TableRegistry::getTableLocator()->get('ViewMrrhhBonoEstabilidadEconomica', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhBonoEstabilidadEconomica);

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
