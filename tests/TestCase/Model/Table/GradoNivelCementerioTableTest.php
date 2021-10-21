<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GradoNivelCementerioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GradoNivelCementerioTable Test Case
 */
class GradoNivelCementerioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GradoNivelCementerioTable
     */
    public $GradoNivelCementerio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GradoNivelCementerio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GradoNivelCementerio') ? [] : ['className' => GradoNivelCementerioTable::class];
        $this->GradoNivelCementerio = TableRegistry::getTableLocator()->get('GradoNivelCementerio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GradoNivelCementerio);

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
