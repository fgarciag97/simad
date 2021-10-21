<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhVacacionesObrerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhVacacionesObrerosTable Test Case
 */
class MrrhhVacacionesObrerosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhVacacionesObrerosTable
     */
    public $MrrhhVacacionesObreros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhVacacionesObreros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhVacacionesObreros') ? [] : ['className' => MrrhhVacacionesObrerosTable::class];
        $this->MrrhhVacacionesObreros = TableRegistry::getTableLocator()->get('MrrhhVacacionesObreros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhVacacionesObreros);

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
