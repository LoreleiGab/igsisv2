<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Workshops Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Events
 *
 * @method \App\Model\Entity\Workshop get($primaryKey, $options = [])
 * @method \App\Model\Entity\Workshop newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Workshop[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Workshop|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Workshop patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Workshop[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Workshop findOrCreate($search, callable $callback = null)
 */
class WorkshopsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('workshops');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Events', [
            'foreignKey' => 'event_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->boolean('certificate')
            ->requirePresence('certificate', 'create')
            ->notEmpty('certificate');

        $validator
            ->integer('vacancies')
            ->requirePresence('vacancies', 'create')
            ->notEmpty('vacancies');

        $validator
            ->requirePresence('public', 'create')
            ->notEmpty('public');

        $validator
            ->allowEmpty('material');

        $validator
            ->allowEmpty('inscription');

        $validator
            ->decimal('value_hour')
            ->allowEmpty('value_hour');

        $validator
            ->boolean('sale')
            ->allowEmpty('sale');

        $validator
            ->date('divulgation')
            ->allowEmpty('divulgation');

        $validator
            ->integer('workload')
            ->allowEmpty('workload');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['event_id'], 'Events'));

        return $rules;
    }
}
