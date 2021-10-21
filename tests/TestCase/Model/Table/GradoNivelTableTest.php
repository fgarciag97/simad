<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GradoNivelTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GradoNivelTable Test Case
 */
class GradoNivelTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GradoNivelTable
     */
    public $GradoNivel;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GradoNivel'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GradoNivel') ? [] : ['className' => GradoNivelTable::class];
        $this->GradoNivel = TableRegistry::getTableLocator()->get('GradoNivel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GradoNivel);

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
