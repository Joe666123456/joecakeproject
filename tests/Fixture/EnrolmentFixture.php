<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnrolmentFixture
 */
class EnrolmentFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'enrolment';
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
                'type' => 'Lorem ipsum dolor sit amet',
                'startdate' => '2022-08-22',
                'payfee' => 1,
                'student_id' => 1,
                'course_id' => 1,
            ],
        ];
        parent::init();
    }
}
