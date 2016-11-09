<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TypeCalls Model
 *
 * @property \Cake\ORM\Association\HasMany $Calls
 *
 * @method \App\Model\Entity\TypeCall get($primaryKey, $options = [])
 * @method \App\Model\Entity\TypeCall newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TypeCall[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TypeCall|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypeCall patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TypeCall[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TypeCall findOrCreate($search, callable $callback = null)
 */
class TypeCallsTable extends Table
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

        $this->table('type_calls');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Calls', [
            'foreignKey' => 'type_call_id'
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
            ->integer('area')
            ->requirePresence('area', 'create')
            ->notEmpty('area');

        return $validator;
    }
}
