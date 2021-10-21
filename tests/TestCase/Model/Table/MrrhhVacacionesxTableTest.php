<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhVacacionesxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhVacacionesxTable Test Case
 */
class MrrhhVacacionesxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhVacacionesxTable
     */
    public $MrrhhVacacionesx;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhVacacionesx'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhVacacionesx') ? [] : ['className' => MrrhhVacacionesxTable::class];
        $this->MrrhhVacacionesx = TableRegistry::getTableLocator()->get('MrrhhVacacionesx', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhVacacionesx);

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
