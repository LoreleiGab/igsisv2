<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UploadEvents Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Events
 *
 * @method \App\Model\Entity\UploadEvent get($primaryKey, $options = [])
 * @method \App\Model\Entity\UploadEvent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UploadEvent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UploadEvent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UploadEvent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UploadEvent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UploadEvent findOrCreate($search, callable $callback = null)
 */
class UploadEventsTable extends Table
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

        $this->table('upload_events');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Events', [
            'foreignKey' => 'event_id',
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
            ->requirePresence('file', 'create')
            ->notEmpty('file');

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
        $rules->add($rules->existsIn(['event_id'], 'Events'));

        return $rules;
    }
}
