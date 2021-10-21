<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhObrerosNoPermanentesAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhObrerosNoPermanentesAuxTable Test Case
 */
class ViewMrrhhObrerosNoPermanentesAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhObrerosNoPermanentesAuxTable
     */
    public $ViewMrrhhObrerosNoPermanentesAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhObrerosNoPermanentesAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhObrerosNoPermanentesAux') ? [] : ['className' => ViewMrrhhObrerosNoPermanentesAuxTable::class];
        $this->ViewMrrhhObrerosNoPermanentesAux = TableRegistry::getTableLocator()->get('ViewMrrhhObrerosNoPermanentesAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhObrerosNoPermanentesAux);

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
