<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhVacacionesObrerosxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhVacacionesObrerosxTable Test Case
 */
class ViewMrrhhVacacionesObrerosxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhVacacionesObrerosxTable
     */
    public $ViewMrrhhVacacionesObrerosx;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhVacacionesObrerosx'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhVacacionesObrerosx') ? [] : ['className' => ViewMrrhhVacacionesObrerosxTable::class];
        $this->ViewMrrhhVacacionesObrerosx = TableRegistry::getTableLocator()->get('ViewMrrhhVacacionesObrerosx', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhVacacionesObrerosx);

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
