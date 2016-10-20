<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SubEvents Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Events
 * @property \Cake\ORM\Association\BelongsTo $TypeEvents
 * @property \Cake\ORM\Association\HasMany $HistoricOccurrences
 * @property \Cake\ORM\Association\HasMany $Occurrences
 *
 * @method \App\Model\Entity\SubEvent get($primaryKey, $options = [])
 * @method \App\Model\Entity\SubEvent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SubEvent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SubEvent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubEvent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SubEvent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SubEvent findOrCreate($search, callable $callback = null)
 */
class SubEventsTable extends Table
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

        $this->table('sub_events');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->belongsTo('Events', [
            'foreignKey' => 'event_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TypeEvents', [
            'foreignKey' => 'type_event_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('HistoricOccurrences', [
            'foreignKey' => 'sub_event_id'
        ]);
        $this->hasMany('Occurrences', [
            'foreignKey' => 'sub_event_id'
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
            ->integer('published')
            ->allowEmpty('published');

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
        $rules->add($rules->existsIn(['type_event_id'], 'TypeEvents'));

        return $rules;
    }
}
