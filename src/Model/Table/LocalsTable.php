<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Locals Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Instituicaos
 * @property \Cake\ORM\Association\HasMany $AgendaEmCartazs
 * @property \Cake\ORM\Association\HasMany $Agendas
 * @property \Cake\ORM\Association\HasMany $DetalheLocals
 * @property \Cake\ORM\Association\HasMany $HistoricoOcorrencias
 * @property \Cake\ORM\Association\HasMany $Ocorrencias
 * @property \Cake\ORM\Association\BelongsToMany $Usuarios
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
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Instituicaos', [
            'foreignKey' => 'instituicao_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('AgendaEmCartazs', [
            'foreignKey' => 'local_id'
        ]);
        $this->hasMany('Agendas', [
            'foreignKey' => 'local_id'
        ]);
        $this->hasMany('DetalheLocals', [
            'foreignKey' => 'local_id'
        ]);
        $this->hasMany('HistoricoOcorrencias', [
            'foreignKey' => 'local_id'
        ]);
        $this->hasMany('Ocorrencias', [
            'foreignKey' => 'local_id'
        ]);
        $this->belongsToMany('Usuarios', [
            'foreignKey' => 'local_id',
            'targetForeignKey' => 'usuario_id',
            'joinTable' => 'locals_usuarios'
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
            ->requirePresence('local', 'create')
            ->notEmpty('local')
            ->add('local', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('rider');

        $validator
            ->boolean('publicado')
            ->allowEmpty('publicado');

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
        $rules->add($rules->isUnique(['local']));
        $rules->add($rules->existsIn(['instituicao_id'], 'Instituicaos'));

        return $rules;
    }
}
