<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhPenSobreObrerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhPenSobreObrerosTable Test Case
 */
class ViewMrrhhPenSobreObrerosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhPenSobreObrerosTable
     */
    public $ViewMrrhhPenSobreObreros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhPenSobreObreros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhPenSobreObreros') ? [] : ['className' => ViewMrrhhPenSobreObrerosTable::class];
        $this->ViewMrrhhPenSobreObreros = TableRegistry::getTableLocator()->get('ViewMrrhhPenSobreObreros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhPenSobreObreros);

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
