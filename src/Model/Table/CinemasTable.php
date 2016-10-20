<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cinemas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Events
 * @property \Cake\ORM\Association\BelongsTo $MovieCountries
 * @property \Cake\ORM\Association\HasMany $AgendaPosters
 * @property \Cake\ORM\Association\HasMany $Agendas
 * @property \Cake\ORM\Association\HasMany $HistoricOccurrences
 * @property \Cake\ORM\Association\HasMany $Occurrences
 *
 * @method \App\Model\Entity\Cinema get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cinema newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cinema[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cinema|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cinema patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cinema[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cinema findOrCreate($search, callable $callback = null)
 */
class CinemasTable extends Table
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

        $this->table('cinemas');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->belongsTo('Events', [
            'foreignKey' => 'event_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MovieCountries', [
            'foreignKey' => 'movie_country_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('AgendaPosters', [
            'foreignKey' => 'cinema_id'
        ]);
        $this->hasMany('Agendas', [
            'foreignKey' => 'cinema_id'
        ]);
        $this->hasMany('HistoricOccurrences', [
            'foreignKey' => 'cinema_id'
        ]);
        $this->hasMany('Occurrences', [
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('original_title', 'create')
            ->notEmpty('original_title');

        $validator
            ->requirePresence('direction', 'create')
            ->notEmpty('direction');

        $validator
            ->integer('production_year')
            ->requirePresence('production_year', 'create')
            ->notEmpty('production_year');

        $validator
            ->requirePresence('synopsis', 'create')
            ->notEmpty('synopsis');

        $validator
            ->requirePresence('cast', 'create')
            ->notEmpty('cast');

        $validator
            ->requirePresence('genre', 'create')
            ->notEmpty('genre');

        $validator
            ->integer('age_rating')
            ->requirePresence('age_rating', 'create')
            ->notEmpty('age_rating');

        $validator
            ->integer('minutes')
            ->requirePresence('minutes', 'create')
            ->notEmpty('minutes');

        $validator
            ->allowEmpty('link_trailer');

        $validator
            ->requirePresence('gauge', 'create')
            ->notEmpty('gauge');

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
        $rules->add($rules->existsIn(['movie_country_id'], 'MovieCountries'));

        return $rules;
    }
}
