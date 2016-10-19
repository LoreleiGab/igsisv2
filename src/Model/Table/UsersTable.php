<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Institutions
 * @property \Cake\ORM\Association\BelongsTo $Groups
 * @property \Cake\ORM\Association\HasMany $CallComments
 * @property \Cake\ORM\Association\HasMany $Calls
 * @property \Cake\ORM\Association\HasMany $CheckProductions
 * @property \Cake\ORM\Association\HasMany $EstimateControls
 * @property \Cake\ORM\Association\HasMany $Events
 * @property \Cake\ORM\Association\HasMany $FormationEffectives
 * @property \Cake\ORM\Association\HasMany $Formations
 * @property \Cake\ORM\Association\HasMany $Historics
 * @property \Cake\ORM\Association\HasMany $LegalPersons
 * @property \Cake\ORM\Association\HasMany $LogReopenings
 * @property \Cake\ORM\Association\HasMany $Logs
 * @property \Cake\ORM\Association\HasMany $PhysicalPersons
 * @property \Cake\ORM\Association\HasMany $Times
 * @property \Cake\ORM\Association\BelongsToMany $Funds
 * @property \Cake\ORM\Association\BelongsToMany $Locals
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null)
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Institutions', [
            'foreignKey' => 'institution_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('CallComments', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Calls', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('CheckProductions', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('EstimateControls', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Events', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('FormationEffectives', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Formations', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Historics', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('LegalPersons', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('LogReopenings', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Logs', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('PhysicalPersons', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Times', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsToMany('Funds', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'fund_id',
            'joinTable' => 'funds_users'
        ]);
        $this->belongsToMany('Locals', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'local_id',
            'joinTable' => 'locals_users'
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
            ->requirePresence('username', 'create')
            ->notEmpty('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('rf_rg', 'create')
            ->notEmpty('rf_rg')
            ->add('rf_rg', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->boolean('get_notification')
            ->requirePresence('get_notification', 'create')
            ->notEmpty('get_notification');

        $validator
            ->integer('contracts')
            ->allowEmpty('contracts');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['rf_rg']));
        $rules->add($rules->existsIn(['institution_id'], 'Institutions'));
        $rules->add($rules->existsIn(['group_id'], 'Groups'));

        return $rules;
    }
}
