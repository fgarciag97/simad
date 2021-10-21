<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GradoNivelJubiladosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GradoNivelJubiladosTable Test Case
 */
class GradoNivelJubiladosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GradoNivelJubiladosTable
     */
    public $GradoNivelJubilados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GradoNivelJubilados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GradoNivelJubilados') ? [] : ['className' => GradoNivelJubiladosTable::class];
        $this->GradoNivelJubilados = TableRegistry::getTableLocator()->get('GradoNivelJubilados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GradoNivelJubilados);

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
