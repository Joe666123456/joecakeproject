<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuizFixture
 */
class QuizFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'quiz';
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
                'quiz_time' => '2022-08-22 12:53:53',
                'course_id' => 1,
            ],
        ];
        parent::init();
    }
}
