<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GradoNivelProteccionCivilTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GradoNivelProteccionCivilTable Test Case
 */
class GradoNivelProteccionCivilTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GradoNivelProteccionCivilTable
     */
    public $GradoNivelProteccionCivil;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GradoNivelProteccionCivil'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GradoNivelProteccionCivil') ? [] : ['className' => GradoNivelProteccionCivilTable::class];
        $this->GradoNivelProteccionCivil = TableRegistry::getTableLocator()->get('GradoNivelProteccionCivil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GradoNivelProteccionCivil);

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
