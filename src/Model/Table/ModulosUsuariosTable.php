<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ModulosUsuarios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Usuarios
 * @property \Cake\ORM\Association\BelongsTo $Modulos
 *
 * @method \App\Model\Entity\ModulosUsuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\ModulosUsuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ModulosUsuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ModulosUsuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ModulosUsuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ModulosUsuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ModulosUsuario findOrCreate($search, callable $callback = null)
 */
class ModulosUsuariosTable extends Table
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

        $this->table('modulos_usuarios');
        $this->displayField('usuario_id');
        $this->primaryKey(['usuario_id', 'modulo_id']);

        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Modulos', [
            'foreignKey' => 'modulo_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));
        $rules->add($rules->existsIn(['modulo_id'], 'Modulos'));

        return $rules;
    }
}
