<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Institutions Model
 *
 * @property \Cake\ORM\Association\HasMany $AgendaPosters
 * @property \Cake\ORM\Association\HasMany $Agendas
 * @property \Cake\ORM\Association\HasMany $CheckProductions
 * @property \Cake\ORM\Association\HasMany $Communications
 * @property \Cake\ORM\Association\HasMany $EstimateControls
 * @property \Cake\ORM\Association\HasMany $Events
 * @property \Cake\ORM\Association\HasMany $Funds
 * @property \Cake\ORM\Association\HasMany $HiringRequests
 * @property \Cake\ORM\Association\HasMany $Locals
 * @property \Cake\ORM\Association\HasMany $SpecialProjects
 * @property \Cake\ORM\Association\HasMany $Users
 * @property \Cake\ORM\Association\HasMany $Weblogs
 *
 * @method \App\Model\Entity\Institution get($primaryKey, $options = [])
 * @method \App\Model\Entity\Institution newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Institution[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Institution|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Institution patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Institution[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Institution findOrCreate($search, callable $callback = null)
 */
class InstitutionsTable extends Table
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

        $this->table('institutions');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('AgendaPosters', [
            'foreignKey' => 'institution_id'
        ]);
        $this->hasMany('Agendas', [
            'foreignKey' => 'institution_id'
        ]);
        $this->hasMany('CheckProductions', [
            'foreignKey' => 'institution_id'
        ]);
        $this->hasMany('Communications', [
            'foreignKey' => 'institution_id'
        ]);
        $this->hasMany('EstimateControls', [
            'foreignKey' => 'institution_id'
        ]);
        $this->hasMany('Events', [
            'foreignKey' => 'institution_id'
        ]);
        $this->hasMany('Funds', [
            'foreignKey' => 'institution_id'
        ]);
        $this->hasMany('HiringRequests', [
            'foreignKey' => 'institution_id'
        ]);
        $this->hasMany('Locals', [
            'foreignKey' => 'institution_id'
        ]);
        $this->hasMany('SpecialProjects', [
            'foreignKey' => 'institution_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'institution_id'
        ]);
        $this->hasMany('Weblogs', [
            'foreignKey' => 'institution_id'
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

        $validator
            ->requirePresence('initials', 'create')
            ->notEmpty('initials')
            ->add('initials', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('institution_father')
            ->requirePresence('institution_father', 'create')
            ->notEmpty('institution_father');

        $validator
            ->allowEmpty('logo');

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
        $rules->add($rules->isUnique(['initials']));

        return $rules;
    }
}
