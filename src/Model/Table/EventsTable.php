<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 * @property \Cake\ORM\Association\BelongsTo $JuridicalRelations
 * @property \Cake\ORM\Association\BelongsTo $SpecialProjects
 * @property \Cake\ORM\Association\BelongsTo $TypeEvents
 * @property \Cake\ORM\Association\BelongsTo $Fiscals
 * @property \Cake\ORM\Association\BelongsTo $Surrogates
 * @property \Cake\ORM\Association\BelongsTo $AgeGroups
 * @property \Cake\ORM\Association\BelongsTo $Producers
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Institutions
 * @property \Cake\ORM\Association\HasMany $AgendaPosters
 * @property \Cake\ORM\Association\HasMany $Agendas
 * @property \Cake\ORM\Association\HasMany $Calls
 * @property \Cake\ORM\Association\HasMany $CheckProductions
 * @property \Cake\ORM\Association\HasMany $Cinemas
 * @property \Cake\ORM\Association\HasMany $Communications
 * @property \Cake\ORM\Association\HasMany $HistoricOccurrences
 * @property \Cake\ORM\Association\HasMany $Historics
 * @property \Cake\ORM\Association\HasMany $InformationProductions
 * @property \Cake\ORM\Association\HasMany $LegalPersons
 * @property \Cake\ORM\Association\HasMany $LegalRepresentatives
 * @property \Cake\ORM\Association\HasMany $LogReopenings
 * @property \Cake\ORM\Association\HasMany $Musics
 * @property \Cake\ORM\Association\HasMany $Occurrences
 * @property \Cake\ORM\Association\HasMany $PhysicalPersons
 * @property \Cake\ORM\Association\HasMany $Services
 * @property \Cake\ORM\Association\HasMany $SubEvents
 * @property \Cake\ORM\Association\HasMany $TempDatas
 * @property \Cake\ORM\Association\HasMany $TempPosters
 * @property \Cake\ORM\Association\HasMany $TheaterDances
 * @property \Cake\ORM\Association\HasMany $UploadEvents
 * @property \Cake\ORM\Association\HasMany $Workshops
 *
 * @method \App\Model\Entity\Event get($primaryKey, $options = [])
 * @method \App\Model\Entity\Event newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Event[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Event|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Event[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Event findOrCreate($search, callable $callback = null)
 */
class EventsTable extends Table
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

        $this->table('events');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('JuridicalRelations', [
            'foreignKey' => 'juridical_relation_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SpecialProjects', [
            'foreignKey' => 'special_project_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TypeEvents', [
            'foreignKey' => 'type_event_id',
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
        $this->belongsTo('AgeGroups', [
            'foreignKey' => 'age_group_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Producers', [
            'foreignKey' => 'producer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Institutions', [
            'foreignKey' => 'institution_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('AgendaPosters', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('Agendas', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('Calls', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('CheckProductions', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('Cinemas', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('Communications', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('HistoricOccurrences', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('Historics', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('InformationProductions', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('LegalPersons', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('LegalRepresentatives', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('LogReopenings', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('Musics', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('Occurrences', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('PhysicalPersons', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('Services', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('SubEvents', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('TempDatas', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('TempPosters', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('TheaterDances', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('UploadEvents', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('Workshops', [
            'foreignKey' => 'event_id'
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
            ->boolean('sub_event')
            ->allowEmpty('sub_event');

        $validator
            ->requirePresence('author', 'create')
            ->notEmpty('author');

        $validator
            ->allowEmpty('technical_form');

        $validator
            ->requirePresence('synopsis', 'create')
            ->notEmpty('synopsis');

        $validator
            ->requirePresence('release_communication', 'create')
            ->notEmpty('release_communication');

        $validator
            ->allowEmpty('links');

        $validator
            ->dateTime('date_send')
            ->requirePresence('date_send', 'create')
            ->notEmpty('date_send');

        $validator
            ->allowEmpty('public_target');

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
        $rules->add($rules->existsIn(['juridical_relation_id'], 'JuridicalRelations'));
        $rules->add($rules->existsIn(['special_project_id'], 'SpecialProjects'));
        $rules->add($rules->existsIn(['type_event_id'], 'TypeEvents'));
        $rules->add($rules->existsIn(['fiscal_id'], 'Fiscals'));
        $rules->add($rules->existsIn(['surrogate_id'], 'Surrogates'));
        $rules->add($rules->existsIn(['age_group_id'], 'AgeGroups'));
        $rules->add($rules->existsIn(['producer_id'], 'Producers'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['institution_id'], 'Institutions'));

        return $rules;
    }
}
