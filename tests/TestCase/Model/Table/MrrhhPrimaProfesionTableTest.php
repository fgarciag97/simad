<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhPrimaProfesionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhPrimaProfesionTable Test Case
 */
class MrrhhPrimaProfesionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhPrimaProfesionTable
     */
    public $MrrhhPrimaProfesion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhPrimaProfesion'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhPrimaProfesion') ? [] : ['className' => MrrhhPrimaProfesionTable::class];
        $this->MrrhhPrimaProfesion = TableRegistry::getTableLocator()->get('MrrhhPrimaProfesion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhPrimaProfesion);

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
