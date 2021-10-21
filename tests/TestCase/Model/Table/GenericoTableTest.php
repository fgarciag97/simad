<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GenericoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GenericoTable Test Case
 */
class GenericoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GenericoTable
     */
    public $Generico;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Generico'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Generico') ? [] : ['className' => GenericoTable::class];
        $this->Generico = TableRegistry::getTableLocator()->get('Generico', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Generico);

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
