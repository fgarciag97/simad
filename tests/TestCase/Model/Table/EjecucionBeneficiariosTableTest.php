<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EjecucionBeneficiariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EjecucionBeneficiariosTable Test Case
 */
class EjecucionBeneficiariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EjecucionBeneficiariosTable
     */
    public $EjecucionBeneficiarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EjecucionBeneficiarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EjecucionBeneficiarios') ? [] : ['className' => EjecucionBeneficiariosTable::class];
        $this->EjecucionBeneficiarios = TableRegistry::getTableLocator()->get('EjecucionBeneficiarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EjecucionBeneficiarios);

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
