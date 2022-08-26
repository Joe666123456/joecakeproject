<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Quizzes Model
 *
 * @property \App\Model\Table\CoursesTable&\Cake\ORM\Association\BelongsTo $Courses
 * @property \App\Model\Table\CertificationsTable&\Cake\ORM\Association\HasMany $Certifications
 * @property \App\Model\Table\QuestionsTable&\Cake\ORM\Association\HasMany $Questions
 *
 * @method \App\Model\Entity\Quiz newEmptyEntity()
 * @method \App\Model\Entity\Quiz newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Quiz[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Quiz get($primaryKey, $options = [])
 * @method \App\Model\Entity\Quiz findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Quiz patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Quiz[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Quiz|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Quiz saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Quiz[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Quiz[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Quiz[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Quiz[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class QuizzesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('quizzes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Courses', [
            'foreignKey' => 'course_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Certifications', [
            'foreignKey' => 'quiz_id',
        ]);
        $this->hasMany('Questions', [
            'foreignKey' => 'quiz_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('quiz_title')
            ->maxLength('quiz_title', 255)
            ->requirePresence('quiz_title', 'create')
            ->notEmptyString('quiz_title');

        $validator
            ->dateTime('quiz_time')
            ->requirePresence('quiz_time', 'create')
            ->notEmptyDateTime('quiz_time');

        $validator
            ->integer('course_id')
            ->requirePresence('course_id', 'create')
            ->notEmptyString('course_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('course_id', 'Courses'), ['errorField' => 'course_id']);

        return $rules;
    }
}
