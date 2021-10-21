<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhGruposEmpleadosFijosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhGruposEmpleadosFijosTable Test Case
 */
class MrrhhGruposEmpleadosFijosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhGruposEmpleadosFijosTable
     */
    public $MrrhhGruposEmpleadosFijos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhGruposEmpleadosFijos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhGruposEmpleadosFijos') ? [] : ['className' => MrrhhGruposEmpleadosFijosTable::class];
        $this->MrrhhGruposEmpleadosFijos = TableRegistry::getTableLocator()->get('MrrhhGruposEmpleadosFijos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhGruposEmpleadosFijos);

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
