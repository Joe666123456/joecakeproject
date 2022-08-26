<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuestionsFixture
 */
class QuestionsFixture extends TestFixture
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
                'quiz_id' => 1,
                'option1' => 'Lorem ipsum dolor sit amet',
                'option2' => 'Lorem ipsum dolor sit amet',
                'option3' => 'Lorem ipsum dolor sit amet',
                'answer' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
