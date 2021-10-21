<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhJubiladosObrerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhJubiladosObrerosTable Test Case
 */
class ViewMrrhhJubiladosObrerosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhJubiladosObrerosTable
     */
    public $ViewMrrhhJubiladosObreros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhJubiladosObreros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhJubiladosObreros') ? [] : ['className' => ViewMrrhhJubiladosObrerosTable::class];
        $this->ViewMrrhhJubiladosObreros = TableRegistry::getTableLocator()->get('ViewMrrhhJubiladosObreros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhJubiladosObreros);

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
