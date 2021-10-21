<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhNivelesObrerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhNivelesObrerosTable Test Case
 */
class MrrhhNivelesObrerosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhNivelesObrerosTable
     */
    public $MrrhhNivelesObreros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhNivelesObreros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhNivelesObreros') ? [] : ['className' => MrrhhNivelesObrerosTable::class];
        $this->MrrhhNivelesObreros = TableRegistry::getTableLocator()->get('MrrhhNivelesObreros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhNivelesObreros);

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
