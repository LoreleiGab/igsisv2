<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Verbas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Instituicaos
 * @property \Cake\ORM\Association\HasMany $ControleOrcamentos
 * @property \Cake\ORM\Association\HasMany $PedidoContratacaos
 * @property \Cake\ORM\Association\HasMany $VerbaMultiplas
 * @property \Cake\ORM\Association\BelongsToMany $Usuarios
 *
 * @method \App\Model\Entity\Verba get($primaryKey, $options = [])
 * @method \App\Model\Entity\Verba newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Verba[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Verba|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Verba patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Verba[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Verba findOrCreate($search, callable $callback = null)
 */
class VerbasTable extends Table
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

        $this->table('verbas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Instituicaos', [
            'foreignKey' => 'instituicao_id'
        ]);
        $this->hasMany('ControleOrcamentos', [
            'foreignKey' => 'verba_id'
        ]);
        $this->hasMany('PedidoContratacaos', [
            'foreignKey' => 'verba_id'
        ]);
        $this->hasMany('VerbaMultiplas', [
            'foreignKey' => 'verba_id'
        ]);
        $this->belongsToMany('Usuarios', [
            'foreignKey' => 'verba_id',
            'targetForeignKey' => 'usuario_id',
            'joinTable' => 'usuarios_verbas'
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
            ->requirePresence('verba', 'create')
            ->notEmpty('verba')
            ->add('verba', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('pai')
            ->allowEmpty('pai');

        $validator
            ->decimal('pf')
            ->allowEmpty('pf');

        $validator
            ->decimal('pj')
            ->allowEmpty('pj');

        $validator
            ->decimal('premio')
            ->allowEmpty('premio');

        $validator
            ->allowEmpty('dotacao_orcamentaria');

        $validator
            ->boolean('multiplo')
            ->allowEmpty('multiplo');

        $validator
            ->integer('do_pf')
            ->requirePresence('do_pf', 'create')
            ->notEmpty('do_pf');

        $validator
            ->integer('doPj')
            ->requirePresence('doPj', 'create')
            ->notEmpty('doPj');

        $validator
            ->integer('do_premio')
            ->requirePresence('do_premio', 'create')
            ->notEmpty('do_premio');

        $validator
            ->requirePresence('detalhamento_acao', 'create')
            ->notEmpty('detalhamento_acao');

        $validator
            ->requirePresence('numero_reserva_pj', 'create')
            ->notEmpty('numero_reserva_pj');

        $validator
            ->requirePresence('link_pj', 'create')
            ->notEmpty('link_pj');

        $validator
            ->requirePresence('Numero_reserva_pf', 'create')
            ->notEmpty('Numero_reserva_pf');

        $validator
            ->requirePresence('link_pf', 'create')
            ->notEmpty('link_pf');

        $validator
            ->requirePresence('numero_reserva_encargos', 'create')
            ->notEmpty('numero_reserva_encargos');

        $validator
            ->requirePresence('vocativo', 'create')
            ->notEmpty('vocativo');

        $validator
            ->requirePresence('setor_vocativo', 'create')
            ->notEmpty('setor_vocativo');

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
        $rules->add($rules->isUnique(['verba']));
        $rules->add($rules->existsIn(['instituicao_id'], 'Instituicaos'));

        return $rules;
    }
}
