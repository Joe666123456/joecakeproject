<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RecordFixture
 */
class RecordFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'record';
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
                'record_file' => 'Lorem ipsum dolor sit amet',
                'record_title' => 'Lorem ipsum dolor sit amet',
                'record_length' => 'Lorem ipsum dolor sit amet',
                'course_id' => 1,
            ],
        ];
        parent::init();
    }
}
