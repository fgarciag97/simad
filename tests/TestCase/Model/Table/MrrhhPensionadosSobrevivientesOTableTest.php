<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhPensionadosSobrevivientesOTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhPensionadosSobrevivientesOTable Test Case
 */
class MrrhhPensionadosSobrevivientesOTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhPensionadosSobrevivientesOTable
     */
    public $MrrhhPensionadosSobrevivientesO;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhPensionadosSobrevivientesO'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhPensionadosSobrevivientesO') ? [] : ['className' => MrrhhPensionadosSobrevivientesOTable::class];
        $this->MrrhhPensionadosSobrevivientesO = TableRegistry::getTableLocator()->get('MrrhhPensionadosSobrevivientesO', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhPensionadosSobrevivientesO);

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
