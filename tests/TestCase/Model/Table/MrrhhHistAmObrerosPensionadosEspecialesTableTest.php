<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistAmObrerosPensionadosEspecialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistAmObrerosPensionadosEspecialesTable Test Case
 */
class MrrhhHistAmObrerosPensionadosEspecialesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistAmObrerosPensionadosEspecialesTable
     */
    public $MrrhhHistAmObrerosPensionadosEspeciales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistAmObrerosPensionadosEspeciales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistAmObrerosPensionadosEspeciales') ? [] : ['className' => MrrhhHistAmObrerosPensionadosEspecialesTable::class];
        $this->MrrhhHistAmObrerosPensionadosEspeciales = TableRegistry::getTableLocator()->get('MrrhhHistAmObrerosPensionadosEspeciales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistAmObrerosPensionadosEspeciales);

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
