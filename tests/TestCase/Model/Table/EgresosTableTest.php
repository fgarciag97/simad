<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EgresosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EgresosTable Test Case
 */
class EgresosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EgresosTable
     */
    public $Egresos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Egresos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Egresos') ? [] : ['className' => EgresosTable::class];
        $this->Egresos = TableRegistry::getTableLocator()->get('Egresos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Egresos);

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
