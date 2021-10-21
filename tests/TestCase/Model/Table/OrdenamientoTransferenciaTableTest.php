<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdenamientoTransferenciaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdenamientoTransferenciaTable Test Case
 */
class OrdenamientoTransferenciaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdenamientoTransferenciaTable
     */
    public $OrdenamientoTransferencia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OrdenamientoTransferencia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrdenamientoTransferencia') ? [] : ['className' => OrdenamientoTransferenciaTable::class];
        $this->OrdenamientoTransferencia = TableRegistry::getTableLocator()->get('OrdenamientoTransferencia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrdenamientoTransferencia);

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
