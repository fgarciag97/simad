<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogUserTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogUserTable Test Case
 */
class LogUserTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LogUserTable
     */
    public $LogUser;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.LogUser'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LogUser') ? [] : ['className' => LogUserTable::class];
        $this->LogUser = TableRegistry::getTableLocator()->get('LogUser', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LogUser);

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
