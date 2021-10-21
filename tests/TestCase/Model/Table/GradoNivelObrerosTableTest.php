<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GradoNivelObrerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GradoNivelObrerosTable Test Case
 */
class GradoNivelObrerosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GradoNivelObrerosTable
     */
    public $GradoNivelObreros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GradoNivelObreros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GradoNivelObreros') ? [] : ['className' => GradoNivelObrerosTable::class];
        $this->GradoNivelObreros = TableRegistry::getTableLocator()->get('GradoNivelObreros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GradoNivelObreros);

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
