<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentsFixture
 */
class StudentsFixture extends TestFixture
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
                'firstname' => 'Lorem ips',
                'lastname' => 'Lorem ips',
                'age' => 1,
                'gender' => 'Lorem ips',
                'phone' => 'Lorem ips',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
