<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhGruposObrerosNoPermanentesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhGruposObrerosNoPermanentesTable Test Case
 */
class MrrhhGruposObrerosNoPermanentesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhGruposObrerosNoPermanentesTable
     */
    public $MrrhhGruposObrerosNoPermanentes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhGruposObrerosNoPermanentes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhGruposObrerosNoPermanentes') ? [] : ['className' => MrrhhGruposObrerosNoPermanentesTable::class];
        $this->MrrhhGruposObrerosNoPermanentes = TableRegistry::getTableLocator()->get('MrrhhGruposObrerosNoPermanentes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhGruposObrerosNoPermanentes);

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
