<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHorasExtrasObrerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHorasExtrasObrerosTable Test Case
 */
class MrrhhHorasExtrasObrerosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHorasExtrasObrerosTable
     */
    public $MrrhhHorasExtrasObreros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHorasExtrasObreros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHorasExtrasObreros') ? [] : ['className' => MrrhhHorasExtrasObrerosTable::class];
        $this->MrrhhHorasExtrasObreros = TableRegistry::getTableLocator()->get('MrrhhHorasExtrasObreros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHorasExtrasObreros);

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
