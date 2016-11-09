<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Locals Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Institutions
 * @property \Cake\ORM\Association\HasMany $AgendaPosters
 * @property \Cake\ORM\Association\HasMany $Agendas
 * @property \Cake\ORM\Association\HasMany $DetailLocals
 * @property \Cake\ORM\Association\HasMany $HistoricOccurrences
 * @property \Cake\ORM\Association\HasMany $Occurrences
 * @property \Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Local get($primaryKey, $options = [])
 * @method \App\Model\Entity\Local newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Local[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Local|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Local patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Local[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Local findOrCreate($search, callable $callback = null)
 */
class LocalsTable extends Table
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

        $this->table('locals');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Institutions', [
            'foreignKey' => 'institution_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('AgendaPosters', [
            'foreignKey' => 'local_id'
        ]);
        $this->hasMany('Agendas', [
            'foreignKey' => 'local_id'
        ]);
        $this->hasMany('DetailLocals', [
            'foreignKey' => 'local_id'
        ]);
        $this->hasMany('HistoricOccurrences', [
            'foreignKey' => 'local_id'
        ]);
        $this->hasMany('Occurrences', [
            'foreignKey' => 'local_id'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'local_id',
            'targetForeignKey' => 'user_id',
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
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('rider');

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
        $rules->add($rules->isUnique(['name']));
        $rules->add($rules->existsIn(['institution_id'], 'Institutions'));

        return $rules;
    }
}
