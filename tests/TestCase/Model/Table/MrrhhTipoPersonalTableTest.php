<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhTipoPersonalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhTipoPersonalTable Test Case
 */
class MrrhhTipoPersonalTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhTipoPersonalTable
     */
    public $MrrhhTipoPersonal;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhTipoPersonal'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhTipoPersonal') ? [] : ['className' => MrrhhTipoPersonalTable::class];
        $this->MrrhhTipoPersonal = TableRegistry::getTableLocator()->get('MrrhhTipoPersonal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhTipoPersonal);

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
