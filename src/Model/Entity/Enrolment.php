<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enrolment Entity
 *
 * @property int $id
 * @property string|null $type
 * @property \Cake\I18n\FrozenDate|null $startdate
 * @property float|null $payfee
 * @property int $student_id
 * @property int $course_id
 *
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\Course $course
 */
class Enrolment extends Entity
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
        'type' => true,
        'startdate' => true,
        'payfee' => true,
        'student_id' => true,
        'course_id' => true,
        'student' => true,
        'course' => true,
    ];
}
