<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InternalEvents Model
 *
 * @property \Cake\ORM\Association\BelongsTo $TypeEvents
 * @property \Cake\ORM\Association\BelongsTo $SpecialProjects
 * @property \Cake\ORM\Association\BelongsTo $Fiscals
 * @property \Cake\ORM\Association\BelongsTo $Surrogates
 * @property \Cake\ORM\Association\BelongsTo $Producers
 * @property \Cake\ORM\Association\BelongsTo $InformationProductions
 *
 * @method \App\Model\Entity\InternalEvent get($primaryKey, $options = [])
 * @method \App\Model\Entity\InternalEvent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InternalEvent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InternalEvent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InternalEvent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InternalEvent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InternalEvent findOrCreate($search, callable $callback = null)
 */
class InternalEventsTable extends Table
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

        $this->table('internal_events');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('TypeEvents', [
            'foreignKey' => 'type_event_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SpecialProjects', [
            'foreignKey' => 'especial_project_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Fiscals', [
            'foreignKey' => 'fiscal_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Surrogates', [
            'foreignKey' => 'surrogate_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Producers', [
            'foreignKey' => 'producer_id'
        ]);
        $this->belongsTo('InformationProductions', [
            'foreignKey' => 'information_production_id'
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
            ->notEmpty('name');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->boolean('published')
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
        $rules->add($rules->existsIn(['type_event_id'], 'TypeEvents'));
        $rules->add($rules->existsIn(['especial_project_id'], 'SpecialProjects'));
        $rules->add($rules->existsIn(['fiscal_id'], 'Fiscals'));
        $rules->add($rules->existsIn(['surrogate_id'], 'Surrogates'));
        $rules->add($rules->existsIn(['producer_id'], 'Producers'));
        $rules->add($rules->existsIn(['information_production_id'], 'InformationProductions'));

        return $rules;
    }
}
