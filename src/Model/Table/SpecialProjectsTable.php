<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SpecialProjects Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Institutions
 *
 * @method \App\Model\Entity\SpecialProject get($primaryKey, $options = [])
 * @method \App\Model\Entity\SpecialProject newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SpecialProject[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SpecialProject|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SpecialProject patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SpecialProject[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SpecialProject findOrCreate($search, callable $callback = null)
 */
class SpecialProjectsTable extends Table
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

        $this->table('special_projects');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Institutions', [
            'foreignKey' => 'institution_id',
            'joinType' => 'INNER'
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
            ->requirePresence('especial_project', 'create')
            ->notEmpty('especial_project')
            ->add('especial_project', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['especial_project']));
        $rules->add($rules->existsIn(['institution_id'], 'Institutions'));

        return $rules;
    }
}
