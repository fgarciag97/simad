<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhNivelesObrerosNoPermanentesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhNivelesObrerosNoPermanentesTable Test Case
 */
class MrrhhNivelesObrerosNoPermanentesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhNivelesObrerosNoPermanentesTable
     */
    public $MrrhhNivelesObrerosNoPermanentes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhNivelesObrerosNoPermanentes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhNivelesObrerosNoPermanentes') ? [] : ['className' => MrrhhNivelesObrerosNoPermanentesTable::class];
        $this->MrrhhNivelesObrerosNoPermanentes = TableRegistry::getTableLocator()->get('MrrhhNivelesObrerosNoPermanentes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhNivelesObrerosNoPermanentes);

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
