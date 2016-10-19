<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TypeEvents Model
 *
 * @property \Cake\ORM\Association\HasMany $AgendaPosters
 * @property \Cake\ORM\Association\HasMany $Agendas
 * @property \Cake\ORM\Association\HasMany $Events
 * @property \Cake\ORM\Association\HasMany $InternalEvents
 * @property \Cake\ORM\Association\HasMany $SubEvents
 * @property \Cake\ORM\Association\HasMany $TempPosters
 *
 * @method \App\Model\Entity\TypeEvent get($primaryKey, $options = [])
 * @method \App\Model\Entity\TypeEvent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TypeEvent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TypeEvent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypeEvent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TypeEvent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TypeEvent findOrCreate($search, callable $callback = null)
 */
class TypeEventsTable extends Table
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

        $this->table('type_events');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('AgendaPosters', [
            'foreignKey' => 'type_event_id'
        ]);
        $this->hasMany('Agendas', [
            'foreignKey' => 'type_event_id'
        ]);
        $this->hasMany('Events', [
            'foreignKey' => 'type_event_id'
        ]);
        $this->hasMany('InternalEvents', [
            'foreignKey' => 'type_event_id'
        ]);
        $this->hasMany('SubEvents', [
            'foreignKey' => 'type_event_id'
        ]);
        $this->hasMany('TempPosters', [
            'foreignKey' => 'type_event_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['name']));

        return $rules;
    }
}
