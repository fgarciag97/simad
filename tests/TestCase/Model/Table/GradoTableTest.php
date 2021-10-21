<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GradoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GradoTable Test Case
 */
class GradoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GradoTable
     */
    public $Grado;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Grado'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Grado') ? [] : ['className' => GradoTable::class];
        $this->Grado = TableRegistry::getTableLocator()->get('Grado', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Grado);

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
