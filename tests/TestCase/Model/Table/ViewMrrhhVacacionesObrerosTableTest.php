<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhVacacionesObrerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhVacacionesObrerosTable Test Case
 */
class ViewMrrhhVacacionesObrerosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhVacacionesObrerosTable
     */
    public $ViewMrrhhVacacionesObreros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhVacacionesObreros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhVacacionesObreros') ? [] : ['className' => ViewMrrhhVacacionesObrerosTable::class];
        $this->ViewMrrhhVacacionesObreros = TableRegistry::getTableLocator()->get('ViewMrrhhVacacionesObreros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhVacacionesObreros);

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
