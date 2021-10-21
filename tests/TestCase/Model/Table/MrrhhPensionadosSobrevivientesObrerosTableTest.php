<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhPensionadosSobrevivientesObrerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhPensionadosSobrevivientesObrerosTable Test Case
 */
class MrrhhPensionadosSobrevivientesObrerosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhPensionadosSobrevivientesObrerosTable
     */
    public $MrrhhPensionadosSobrevivientesObreros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhPensionadosSobrevivientesObreros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhPensionadosSobrevivientesObreros') ? [] : ['className' => MrrhhPensionadosSobrevivientesObrerosTable::class];
        $this->MrrhhPensionadosSobrevivientesObreros = TableRegistry::getTableLocator()->get('MrrhhPensionadosSobrevivientesObreros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhPensionadosSobrevivientesObreros);

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
