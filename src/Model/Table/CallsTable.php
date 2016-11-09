<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Calls Model
 *
 * @property \Cake\ORM\Association\BelongsTo $TypeCalls
 * @property \Cake\ORM\Association\BelongsTo $Events
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\HasMany $CallComments
 * @property \Cake\ORM\Association\HasMany $LogReopenings
 * @property \Cake\ORM\Association\BelongsToMany $Status
 *
 * @method \App\Model\Entity\Call get($primaryKey, $options = [])
 * @method \App\Model\Entity\Call newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Call[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Call|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Call patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Call[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Call findOrCreate($search, callable $callback = null)
 */
class CallsTable extends Table
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

        $this->table('calls');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->belongsTo('TypeCalls', [
            'foreignKey' => 'type_call_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Events', [
            'foreignKey' => 'event_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('CallComments', [
            'foreignKey' => 'call_id'
        ]);
        $this->hasMany('LogReopenings', [
            'foreignKey' => 'call_id'
        ]);
        $this->belongsToMany('Status', [
            'foreignKey' => 'call_id',
            'targetForeignKey' => 'status_id',
            'joinTable' => 'status_calls'
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->allowEmpty('justification');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        $validator
            ->allowEmpty('note');

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
        $rules->add($rules->existsIn(['type_call_id'], 'TypeCalls'));
        $rules->add($rules->existsIn(['event_id'], 'Events'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
