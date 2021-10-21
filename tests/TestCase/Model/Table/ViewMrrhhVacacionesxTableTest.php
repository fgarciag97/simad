<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhVacacionesxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhVacacionesxTable Test Case
 */
class ViewMrrhhVacacionesxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhVacacionesxTable
     */
    public $ViewMrrhhVacacionesx;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhVacacionesx'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhVacacionesx') ? [] : ['className' => ViewMrrhhVacacionesxTable::class];
        $this->ViewMrrhhVacacionesx = TableRegistry::getTableLocator()->get('ViewMrrhhVacacionesx', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhVacacionesx);

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
