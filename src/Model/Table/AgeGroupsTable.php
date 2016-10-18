<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AgeGroups Model
 *
 * @property \Cake\ORM\Association\HasMany $Events
 *
 * @method \App\Model\Entity\AgeGroup get($primaryKey, $options = [])
 * @method \App\Model\Entity\AgeGroup newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AgeGroup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AgeGroup|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AgeGroup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AgeGroup[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AgeGroup findOrCreate($search, callable $callback = null)
 */
class AgeGroupsTable extends Table
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

        $this->table('age_groups');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Events', [
            'foreignKey' => 'age_group_id'
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
            ->requirePresence('age_group', 'create')
            ->notEmpty('age_group')
            ->add('age_group', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['age_group']));

        return $rules;
    }
}
