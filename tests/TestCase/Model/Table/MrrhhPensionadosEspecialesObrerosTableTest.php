<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhPensionadosEspecialesObrerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhPensionadosEspecialesObrerosTable Test Case
 */
class MrrhhPensionadosEspecialesObrerosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhPensionadosEspecialesObrerosTable
     */
    public $MrrhhPensionadosEspecialesObreros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhPensionadosEspecialesObreros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhPensionadosEspecialesObreros') ? [] : ['className' => MrrhhPensionadosEspecialesObrerosTable::class];
        $this->MrrhhPensionadosEspecialesObreros = TableRegistry::getTableLocator()->get('MrrhhPensionadosEspecialesObreros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhPensionadosEspecialesObreros);

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
