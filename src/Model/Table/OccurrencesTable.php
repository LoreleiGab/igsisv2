<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Occurrences Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Events
 * @property \Cake\ORM\Association\BelongsTo $SubEvents
 * @property \Cake\ORM\Association\BelongsTo $TypeOccurrences
 * @property \Cake\ORM\Association\BelongsTo $Locals
 * @property \Cake\ORM\Association\BelongsTo $Cinemas
 *
 * @method \App\Model\Entity\Occurrence get($primaryKey, $options = [])
 * @method \App\Model\Entity\Occurrence newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Occurrence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Occurrence|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Occurrence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Occurrence[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Occurrence findOrCreate($search, callable $callback = null)
 */
class OccurrencesTable extends Table
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

        $this->table('occurrences');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Events', [
            'foreignKey' => 'event_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SubEvents', [
            'foreignKey' => 'sub_event_id'
        ]);
        $this->belongsTo('TypeOccurrences', [
            'foreignKey' => 'occurrence_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Locals', [
            'foreignKey' => 'local_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Cinemas', [
            'foreignKey' => 'cinema_id'
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
            ->date('date_starter')
            ->requirePresence('date_starter', 'create')
            ->notEmpty('date_starter');

        $validator
            ->date('date_final')
            ->allowEmpty('date_final');

        $validator
            ->boolean('monday')
            ->allowEmpty('monday');

        $validator
            ->boolean('tuesday')
            ->allowEmpty('tuesday');

        $validator
            ->boolean('wednesday')
            ->allowEmpty('wednesday');

        $validator
            ->boolean('thursday')
            ->allowEmpty('thursday');

        $validator
            ->boolean('friday')
            ->allowEmpty('friday');

        $validator
            ->boolean('saturday')
            ->allowEmpty('saturday');

        $validator
            ->boolean('sunday')
            ->allowEmpty('sunday');

        $validator
            ->integer('duration')
            ->requirePresence('duration', 'create')
            ->notEmpty('duration');

        $validator
            ->boolean('especial_day')
            ->allowEmpty('especial_day');

        $validator
            ->boolean('audio_description')
            ->allowEmpty('audio_description');

        $validator
            ->boolean('libras')
            ->allowEmpty('libras');

        $validator
            ->time('start_hour')
            ->requirePresence('start_hour', 'create')
            ->notEmpty('start_hour');

        $validator
            ->boolean('cultural_turn')
            ->allowEmpty('cultural_turn');

        $validator
            ->decimal('popular_price')
            ->allowEmpty('popular_price');

        $validator
            ->boolean('get_ticket')
            ->requirePresence('get_ticket', 'create')
            ->notEmpty('get_ticket');

        $validator
            ->decimal('ticket_value')
            ->requirePresence('ticket_value', 'create')
            ->notEmpty('ticket_value');

        $validator
            ->requirePresence('local_other', 'create')
            ->notEmpty('local_other');

        $validator
            ->integer('reserved')
            ->allowEmpty('reserved');

        $validator
            ->integer('capacity')
            ->allowEmpty('capacity');

        $validator
            ->integer('timezone')
            ->allowEmpty('timezone');

        $validator
            ->boolean('all_day')
            ->allowEmpty('all_day');

        $validator
            ->allowEmpty('frequency');

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
        $rules->add($rules->existsIn(['event_id'], 'Events'));
        $rules->add($rules->existsIn(['sub_event_id'], 'SubEvents'));
        $rules->add($rules->existsIn(['occurrence_type_id'], 'TypeOccurrences'));
        $rules->add($rules->existsIn(['local_id'], 'Locals'));
        $rules->add($rules->existsIn(['cinema_id'], 'Cinemas'));

        return $rules;
    }
}
