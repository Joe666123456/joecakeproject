<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CertificationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CertificationsTable Test Case
 */
class CertificationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CertificationsTable
     */
    protected $Certifications;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Certifications',
        'app.Quizzes',
        'app.Awards',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Certifications') ? [] : ['className' => CertificationsTable::class];
        $this->Certifications = $this->getTableLocator()->get('Certifications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Certifications);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CertificationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CertificationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
