<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Instituicaos
 * @property \Cake\ORM\Association\HasMany $ChamadoComentarios
 * @property \Cake\ORM\Association\HasMany $Chamados
 * @property \Cake\ORM\Association\HasMany $ControleOrcamentos
 * @property \Cake\ORM\Association\HasMany $Eventos
 * @property \Cake\ORM\Association\HasMany $FormacaoVigencias
 * @property \Cake\ORM\Association\HasMany $Formacaos
 * @property \Cake\ORM\Association\HasMany $Historicos
 * @property \Cake\ORM\Association\HasMany $Logs
 * @property \Cake\ORM\Association\HasMany $PessoaFisicas
 * @property \Cake\ORM\Association\HasMany $PessoaJuridicas
 * @property \Cake\ORM\Association\HasMany $Times
 * @property \Cake\ORM\Association\HasMany $VerificaProducaos
 * @property \Cake\ORM\Association\BelongsToMany $Locals
 * @property \Cake\ORM\Association\BelongsToMany $Modulos
 * @property \Cake\ORM\Association\BelongsToMany $Verbas
 *
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, callable $callback = null)
 */
class UsuariosTable extends Table
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

        $this->table('usuarios');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Instituicaos', [
            'foreignKey' => 'instituicao_id'
        ]);
        $this->hasMany('ChamadoComentarios', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('Chamados', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('ControleOrcamentos', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('Eventos', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('FormacaoVigencias', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('Formacaos', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('Historicos', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('Logs', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('PessoaFisicas', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('PessoaJuridicas', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('Times', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('VerificaProducaos', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->belongsToMany('Locals', [
            'foreignKey' => 'usuario_id',
            'targetForeignKey' => 'local_id',
            'joinTable' => 'locals_usuarios'
        ]);
        $this->belongsToMany('Modulos', [
            'foreignKey' => 'usuario_id',
            'targetForeignKey' => 'modulo_id',
            'joinTable' => 'modulos_usuarios'
        ]);
        $this->belongsToMany('Verbas', [
            'foreignKey' => 'usuario_id',
            'targetForeignKey' => 'verba_id',
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
            ->allowEmpty('nome_completo')
            ->add('nome_completo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('rf');

        $validator
            ->requirePresence('nome_usuario', 'create')
            ->notEmpty('nome_usuario')
            ->add('nome_usuario', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('senha', 'create')
            ->notEmpty('senha');

        $validator
            ->allowEmpty('telefone');

        $validator
            ->allowEmpty('local');

        $validator
            ->allowEmpty('verba');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->boolean('receber_notificacao')
            ->requirePresence('receber_notificacao', 'create')
            ->notEmpty('receber_notificacao');

        $validator
            ->boolean('publicado')
            ->allowEmpty('publicado');

        $validator
            ->integer('contratos')
            ->allowEmpty('contratos');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['nome_usuario']));
        $rules->add($rules->isUnique(['nome_completo']));
        $rules->add($rules->existsIn(['instituicao_id'], 'Instituicaos'));

        return $rules;
    }
}
