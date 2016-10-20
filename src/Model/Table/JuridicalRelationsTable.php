<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JuridicalRelations Model
 *
 * @property \Cake\ORM\Association\HasMany $Events
 *
 * @method \App\Model\Entity\JuridicalRelation get($primaryKey, $options = [])
 * @method \App\Model\Entity\JuridicalRelation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\JuridicalRelation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JuridicalRelation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JuridicalRelation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\JuridicalRelation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\JuridicalRelation findOrCreate($search, callable $callback = null)
 */
class JuridicalRelationsTable extends Table
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

        $this->table('juridical_relations');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Events', [
            'foreignKey' => 'juridical_relation_id'
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
            ->requirePresence('juridical_relation', 'create')
            ->notEmpty('juridical_relation')
            ->add('juridical_relation', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['juridical_relation']));

        return $rules;
    }
}
