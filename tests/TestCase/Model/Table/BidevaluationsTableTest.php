<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BidevaluationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BidevaluationsTable Test Case
 */
class BidevaluationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BidevaluationsTable
     */
    public $Bidevaluations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Bidevaluations',
        'app.Bidinfos',
        'app.Users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Bidevaluations') ? [] : ['className' => BidevaluationsTable::class];
        $this->Bidevaluations = TableRegistry::getTableLocator()->get('Bidevaluations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bidevaluations);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
