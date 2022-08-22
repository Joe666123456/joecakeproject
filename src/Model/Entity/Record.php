<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Record Entity
 *
 * @property int $id
 * @property string|null $record_file
 * @property string|null $record_title
 * @property string|null $record_length
 * @property int $course_id
 *
 * @property \App\Model\Entity\Course $course
 */
class Record extends Entity
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
        'record_file' => true,
        'record_title' => true,
        'record_length' => true,
        'course_id' => true,
        'course' => true,
    ];
}
