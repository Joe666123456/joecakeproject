<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property int $id
 * @property int $quiz_id
 * @property string|null $option1
 * @property string|null $option2
 * @property string|null $option3
 * @property string|null $answer
 *
 * @property \App\Model\Entity\Quiz $quiz
 */
class Question extends Entity
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
        'quiz_id' => true,
        'option1' => true,
        'option2' => true,
        'option3' => true,
        'answer' => true,
        'quiz' => true,
    ];
}
