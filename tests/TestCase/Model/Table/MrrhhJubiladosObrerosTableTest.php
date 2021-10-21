<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhJubiladosObrerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhJubiladosObrerosTable Test Case
 */
class MrrhhJubiladosObrerosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhJubiladosObrerosTable
     */
    public $MrrhhJubiladosObreros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhJubiladosObreros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhJubiladosObreros') ? [] : ['className' => MrrhhJubiladosObrerosTable::class];
        $this->MrrhhJubiladosObreros = TableRegistry::getTableLocator()->get('MrrhhJubiladosObreros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhJubiladosObreros);

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
