<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Surrogates Model
 *
 * @property \Cake\ORM\Association\HasMany $Events
 * @property \Cake\ORM\Association\HasMany $InternalEvents
 *
 * @method \App\Model\Entity\Surrogate get($primaryKey, $options = [])
 * @method \App\Model\Entity\Surrogate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Surrogate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Surrogate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Surrogate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Surrogate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Surrogate findOrCreate($search, callable $callback = null)
 */
class SurrogatesTable extends Table
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

        $this->table('surrogates');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Events', [
            'foreignKey' => 'surrogate_id'
        ]);
        $this->hasMany('InternalEvents', [
            'foreignKey' => 'surrogate_id'
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
            ->requirePresence('rf', 'create')
            ->notEmpty('rf');

        return $validator;
    }
}
