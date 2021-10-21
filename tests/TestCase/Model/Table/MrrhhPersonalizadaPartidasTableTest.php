<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhPersonalizadaPartidasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhPersonalizadaPartidasTable Test Case
 */
class MrrhhPersonalizadaPartidasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhPersonalizadaPartidasTable
     */
    public $MrrhhPersonalizadaPartidas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhPersonalizadaPartidas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhPersonalizadaPartidas') ? [] : ['className' => MrrhhPersonalizadaPartidasTable::class];
        $this->MrrhhPersonalizadaPartidas = TableRegistry::getTableLocator()->get('MrrhhPersonalizadaPartidas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhPersonalizadaPartidas);

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
