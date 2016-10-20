<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VisualArts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Events
 *
 * @method \App\Model\Entity\VisualArt get($primaryKey, $options = [])
 * @method \App\Model\Entity\VisualArt newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\VisualArt[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VisualArt|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VisualArt patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\VisualArt[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\VisualArt findOrCreate($search, callable $callback = null)
 */
class VisualArtsTable extends Table
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

        $this->table('visual_arts');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Events', [
            'foreignKey' => 'evento_id',
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
            ->integer('number')
            ->allowEmpty('number');

        $validator
            ->allowEmpty('type');

        $validator
            ->decimal('value')
            ->allowEmpty('value');

        $validator
            ->boolean('panel')
            ->allowEmpty('panel');

        $validator
            ->boolean('subtitle')
            ->allowEmpty('subtitle');

        $validator
            ->boolean('identity')
            ->allowEmpty('identity');

        $validator
            ->boolean('support')
            ->allowEmpty('support');

        $validator
            ->boolean('collection')
            ->allowEmpty('collection');

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
        $rules->add($rules->existsIn(['evento_id'], 'Events'));

        return $rules;
    }
}
