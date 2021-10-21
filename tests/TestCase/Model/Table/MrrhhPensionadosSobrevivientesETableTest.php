<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhPensionadosSobrevivientesETable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhPensionadosSobrevivientesETable Test Case
 */
class MrrhhPensionadosSobrevivientesETableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhPensionadosSobrevivientesETable
     */
    public $MrrhhPensionadosSobrevivientesE;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhPensionadosSobrevivientesE'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhPensionadosSobrevivientesE') ? [] : ['className' => MrrhhPensionadosSobrevivientesETable::class];
        $this->MrrhhPensionadosSobrevivientesE = TableRegistry::getTableLocator()->get('MrrhhPensionadosSobrevivientesE', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhPensionadosSobrevivientesE);

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
