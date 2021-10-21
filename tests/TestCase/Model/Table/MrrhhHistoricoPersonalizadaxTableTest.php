<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoPersonalizadaxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoPersonalizadaxTable Test Case
 */
class MrrhhHistoricoPersonalizadaxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoPersonalizadaxTable
     */
    public $MrrhhHistoricoPersonalizadax;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoPersonalizadax'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoPersonalizadax') ? [] : ['className' => MrrhhHistoricoPersonalizadaxTable::class];
        $this->MrrhhHistoricoPersonalizadax = TableRegistry::getTableLocator()->get('MrrhhHistoricoPersonalizadax', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoPersonalizadax);

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
