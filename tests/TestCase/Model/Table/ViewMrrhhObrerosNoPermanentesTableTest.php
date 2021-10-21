<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhObrerosNoPermanentesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhObrerosNoPermanentesTable Test Case
 */
class ViewMrrhhObrerosNoPermanentesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhObrerosNoPermanentesTable
     */
    public $ViewMrrhhObrerosNoPermanentes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhObrerosNoPermanentes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhObrerosNoPermanentes') ? [] : ['className' => ViewMrrhhObrerosNoPermanentesTable::class];
        $this->ViewMrrhhObrerosNoPermanentes = TableRegistry::getTableLocator()->get('ViewMrrhhObrerosNoPermanentes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhObrerosNoPermanentes);

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
