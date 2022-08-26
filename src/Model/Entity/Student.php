<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property string|null $firstname
 * @property string|null $lastname
 * @property int|null $age
 * @property string $gender
 * @property string|null $phone
 * @property string $email
 * @property string $password
 *
 * @property \App\Model\Entity\Award[] $awards
 * @property \App\Model\Entity\Enrolment[] $enrolments
 */
class Student extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'firstname' => true,
        'lastname' => true,
        'age' => true,
        'gender' => true,
        'phone' => true,
        'email' => true,
        'password' => true,
        'awards' => true,
        'enrolments' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
}
