<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fiscals Model
 *
 * @property \Cake\ORM\Association\HasMany $Events
 * @property \Cake\ORM\Association\HasMany $InternalEvents
 *
 * @method \App\Model\Entity\Fiscal get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fiscal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fiscal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fiscal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fiscal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fiscal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fiscal findOrCreate($search, callable $callback = null)
 */
class FiscalsTable extends Table
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

        $this->table('fiscals');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Events', [
            'foreignKey' => 'fiscal_id'
        ]);
        $this->hasMany('InternalEvents', [
            'foreignKey' => 'fiscal_id'
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
