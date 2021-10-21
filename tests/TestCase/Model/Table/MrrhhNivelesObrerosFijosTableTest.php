<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhNivelesObrerosFijosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhNivelesObrerosFijosTable Test Case
 */
class MrrhhNivelesObrerosFijosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhNivelesObrerosFijosTable
     */
    public $MrrhhNivelesObrerosFijos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhNivelesObrerosFijos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhNivelesObrerosFijos') ? [] : ['className' => MrrhhNivelesObrerosFijosTable::class];
        $this->MrrhhNivelesObrerosFijos = TableRegistry::getTableLocator()->get('MrrhhNivelesObrerosFijos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhNivelesObrerosFijos);

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
