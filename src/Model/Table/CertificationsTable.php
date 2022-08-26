<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Certifications Model
 *
 * @property \App\Model\Table\QuizzesTable&\Cake\ORM\Association\BelongsTo $Quizzes
 * @property \App\Model\Table\AwardsTable&\Cake\ORM\Association\HasMany $Awards
 *
 * @method \App\Model\Entity\Certification newEmptyEntity()
 * @method \App\Model\Entity\Certification newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Certification[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Certification get($primaryKey, $options = [])
 * @method \App\Model\Entity\Certification findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Certification patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Certification[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Certification|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Certification saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Certification[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Certification[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Certification[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Certification[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CertificationsTable extends Table
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

        $this->setTable('certifications');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Quizzes', [
            'foreignKey' => 'quiz_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Awards', [
            'foreignKey' => 'certification_id',
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
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->integer('quiz_id')
            ->requirePresence('quiz_id', 'create')
            ->notEmptyString('quiz_id');

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
        $rules->add($rules->existsIn('quiz_id', 'Quizzes'), ['errorField' => 'quiz_id']);

        return $rules;
    }
}
