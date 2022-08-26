<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quiz Entity
 *
 * @property int $id
 * @property string $quiz_title
 * @property \Cake\I18n\FrozenTime $quiz_time
 * @property int $course_id
 *
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\Certification[] $certifications
 * @property \App\Model\Entity\Question[] $questions
 */
class Quiz extends Entity
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
        'quiz_title' => true,
        'quiz_time' => true,
        'course_id' => true,
        'course' => true,
        'certifications' => true,
        'questions' => true,
    ];
}
