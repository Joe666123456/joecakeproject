<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $type
 * @property int $level
 *
 * @property \App\Model\Entity\Enrolment[] $enrolment
 * @property \App\Model\Entity\Quiz[] $quiz
 * @property \App\Model\Entity\Record[] $record
 */
class Course extends Entity
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
        'name' => true,
        'description' => true,
        'type' => true,
        'level' => true,
        'enrolment' => true,
        'quiz' => true,
        'record' => true,
    ];
}
