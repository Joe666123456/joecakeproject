<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AwardFixture
 */
class AwardFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'award';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'student_id' => 1,
                'certification_id' => 1,
            ],
        ];
        parent::init();
    }
}
