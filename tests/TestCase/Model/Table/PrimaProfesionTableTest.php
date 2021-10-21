<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrimaProfesionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrimaProfesionTable Test Case
 */
class PrimaProfesionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PrimaProfesionTable
     */
    public $PrimaProfesion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PrimaProfesion'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PrimaProfesion') ? [] : ['className' => PrimaProfesionTable::class];
        $this->PrimaProfesion = TableRegistry::getTableLocator()->get('PrimaProfesion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PrimaProfesion);

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
