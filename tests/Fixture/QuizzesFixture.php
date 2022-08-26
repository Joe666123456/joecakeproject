<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuizzesFixture
 */
class QuizzesFixture extends TestFixture
{
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
                'quiz_title' => 'Lorem ipsum dolor sit amet',
                'quiz_time' => '2022-08-26 08:28:59',
                'course_id' => 1,
            ],
        ];
        parent::init();
    }
}
