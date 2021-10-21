<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhVacacionesObrerosxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhVacacionesObrerosxTable Test Case
 */
class MrrhhVacacionesObrerosxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhVacacionesObrerosxTable
     */
    public $MrrhhVacacionesObrerosx;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhVacacionesObrerosx'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhVacacionesObrerosx') ? [] : ['className' => MrrhhVacacionesObrerosxTable::class];
        $this->MrrhhVacacionesObrerosx = TableRegistry::getTableLocator()->get('MrrhhVacacionesObrerosx', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhVacacionesObrerosx);

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
