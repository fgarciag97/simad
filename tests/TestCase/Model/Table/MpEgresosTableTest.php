<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MpegresosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MpegresosTable Test Case
 */
class MpegresosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MpegresosTable
     */
    public $Mpegresos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mpegresos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mpegresos') ? [] : ['className' => MpegresosTable::class];
        $this->Mpegresos = TableRegistry::getTableLocator()->get('Mpegresos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mpegresos);

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
