<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Certification Entity
 *
 * @property int $id
 * @property string $title
 * @property int $quiz_id
 *
 * @property \App\Model\Entity\Quiz $quiz
 * @property \App\Model\Entity\Award[] $awards
 */
class Certification extends Entity
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
        'title' => true,
        'quiz_id' => true,
        'quiz' => true,
        'awards' => true,
    ];
}
