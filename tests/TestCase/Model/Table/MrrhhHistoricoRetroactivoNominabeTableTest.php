<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoRetroactivoNominabeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoRetroactivoNominabeTable Test Case
 */
class MrrhhHistoricoRetroactivoNominabeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoRetroactivoNominabeTable
     */
    public $MrrhhHistoricoRetroactivoNominabe;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoRetroactivoNominabe'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoRetroactivoNominabe') ? [] : ['className' => MrrhhHistoricoRetroactivoNominabeTable::class];
        $this->MrrhhHistoricoRetroactivoNominabe = TableRegistry::getTableLocator()->get('MrrhhHistoricoRetroactivoNominabe', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoRetroactivoNominabe);

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
