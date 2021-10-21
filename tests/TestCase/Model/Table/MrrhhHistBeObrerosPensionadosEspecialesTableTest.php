<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistBeObrerosPensionadosEspecialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistBeObrerosPensionadosEspecialesTable Test Case
 */
class MrrhhHistBeObrerosPensionadosEspecialesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistBeObrerosPensionadosEspecialesTable
     */
    public $MrrhhHistBeObrerosPensionadosEspeciales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistBeObrerosPensionadosEspeciales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistBeObrerosPensionadosEspeciales') ? [] : ['className' => MrrhhHistBeObrerosPensionadosEspecialesTable::class];
        $this->MrrhhHistBeObrerosPensionadosEspeciales = TableRegistry::getTableLocator()->get('MrrhhHistBeObrerosPensionadosEspeciales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistBeObrerosPensionadosEspeciales);

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
