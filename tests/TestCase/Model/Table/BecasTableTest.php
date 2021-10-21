<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BecasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BecasTable Test Case
 */
class BecasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BecasTable
     */
    public $Becas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Becas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Becas') ? [] : ['className' => BecasTable::class];
        $this->Becas = TableRegistry::getTableLocator()->get('Becas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Becas);

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
