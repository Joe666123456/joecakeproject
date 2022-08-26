<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnrolmentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnrolmentsTable Test Case
 */
class EnrolmentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EnrolmentsTable
     */
    protected $Enrolments;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Enrolments',
        'app.Students',
        'app.Courses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Enrolments') ? [] : ['className' => EnrolmentsTable::class];
        $this->Enrolments = $this->getTableLocator()->get('Enrolments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Enrolments);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EnrolmentsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\EnrolmentsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
