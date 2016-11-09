<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Funds Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Institutions
 * @property \Cake\ORM\Association\HasMany $EstimateControls
 * @property \Cake\ORM\Association\HasMany $HiringRequests
 * @property \Cake\ORM\Association\HasMany $HistoricHiringResquests
 * @property \Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Fund get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fund newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fund[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fund|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fund patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fund[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fund findOrCreate($search, callable $callback = null)
 */
class FundsTable extends Table
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

        $this->table('funds');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Institutions', [
            'foreignKey' => 'institution_id'
        ]);
        $this->hasMany('EstimateControls', [
            'foreignKey' => 'fund_id'
        ]);
        $this->hasMany('HiringRequests', [
            'foreignKey' => 'fund_id'
        ]);
        $this->hasMany('HistoricHiringResquests', [
            'foreignKey' => 'fund_id'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'fund_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'funds_users'
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
            ->integer('father')
            ->allowEmpty('father');

        $validator
            ->decimal('pf')
            ->allowEmpty('pf');

        $validator
            ->decimal('pj')
            ->allowEmpty('pj');

        $validator
            ->decimal('reward')
            ->allowEmpty('reward');

        $validator
            ->allowEmpty('budget_allocation');

        $validator
            ->boolean('multiple')
            ->allowEmpty('multiple');

        $validator
            ->integer('do_pf')
            ->requirePresence('do_pf', 'create')
            ->notEmpty('do_pf');

        $validator
            ->integer('do_Pj')
            ->requirePresence('do_Pj', 'create')
            ->notEmpty('do_Pj');

        $validator
            ->integer('do_premium')
            ->requirePresence('do_premium', 'create')
            ->notEmpty('do_premium');

        $validator
            ->requirePresence('detailing_action', 'create')
            ->notEmpty('detailing_action');

        $validator
            ->requirePresence('number_reserve_pj', 'create')
            ->notEmpty('number_reserve_pj');

        $validator
            ->requirePresence('link_pj', 'create')
            ->notEmpty('link_pj');

        $validator
            ->requirePresence('number_reserve_pf', 'create')
            ->notEmpty('number_reserve_pf');

        $validator
            ->requirePresence('link_pf', 'create')
            ->notEmpty('link_pf');

        $validator
            ->requirePresence('number_reserve_charges', 'create')
            ->notEmpty('number_reserve_charges');

        $validator
            ->requirePresence('vocative', 'create')
            ->notEmpty('vocative');

        $validator
            ->requirePresence('sector_vocative', 'create')
            ->notEmpty('sector_vocative');

        $validator
            ->allowEmpty('fundscol');

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
        $rules->add($rules->existsIn(['institution_id'], 'Institutions'));

        return $rules;
    }
}
