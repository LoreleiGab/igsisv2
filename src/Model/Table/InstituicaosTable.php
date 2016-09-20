<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Instituicaos Model
 *
 * @property \Cake\ORM\Association\HasMany $AgendaEmCartazs
 * @property \Cake\ORM\Association\HasMany $Agendas
 * @property \Cake\ORM\Association\HasMany $Comunicacaos
 * @property \Cake\ORM\Association\HasMany $ControleOrcamentos
 * @property \Cake\ORM\Association\HasMany $Eventos
 * @property \Cake\ORM\Association\HasMany $Locals
 * @property \Cake\ORM\Association\HasMany $PedidoContratacaos
 * @property \Cake\ORM\Association\HasMany $Usuarios
 * @property \Cake\ORM\Association\HasMany $Verbas
 * @property \Cake\ORM\Association\HasMany $VerificaProducaos
 *
 * @method \App\Model\Entity\Instituicao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Instituicao newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Instituicao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Instituicao|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Instituicao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Instituicao[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Instituicao findOrCreate($search, callable $callback = null)
 */
class InstituicaosTable extends Table
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

        $this->table('instituicaos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('AgendaEmCartazs', [
            'foreignKey' => 'instituicao_id'
        ]);
        $this->hasMany('Agendas', [
            'foreignKey' => 'instituicao_id'
        ]);
        $this->hasMany('Comunicacaos', [
            'foreignKey' => 'instituicao_id'
        ]);
        $this->hasMany('ControleOrcamentos', [
            'foreignKey' => 'instituicao_id'
        ]);
        $this->hasMany('Eventos', [
            'foreignKey' => 'instituicao_id'
        ]);
        $this->hasMany('Locals', [
            'foreignKey' => 'instituicao_id'
        ]);
        $this->hasMany('PedidoContratacaos', [
            'foreignKey' => 'instituicao_id'
        ]);
        $this->hasMany('Usuarios', [
            'foreignKey' => 'instituicao_id'
        ]);
        $this->hasMany('Verbas', [
            'foreignKey' => 'instituicao_id'
        ]);
        $this->hasMany('VerificaProducaos', [
            'foreignKey' => 'instituicao_id'
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
            ->requirePresence('instituicao', 'create')
            ->notEmpty('instituicao')
            ->add('instituicao', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('instituicao_pai')
            ->requirePresence('instituicao_pai', 'create')
            ->notEmpty('instituicao_pai');

        $validator
            ->requirePresence('sigla', 'create')
            ->notEmpty('sigla')
            ->add('sigla', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('logo');

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
        $rules->add($rules->isUnique(['instituicao']));
        $rules->add($rules->isUnique(['sigla']));

        return $rules;
    }
}
