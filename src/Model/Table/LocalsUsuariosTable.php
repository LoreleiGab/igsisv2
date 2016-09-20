<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LocalsUsuarios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Locals
 * @property \Cake\ORM\Association\BelongsTo $Usuarios
 *
 * @method \App\Model\Entity\LocalsUsuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\LocalsUsuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LocalsUsuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LocalsUsuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LocalsUsuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LocalsUsuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LocalsUsuario findOrCreate($search, callable $callback = null)
 */
class LocalsUsuariosTable extends Table
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

        $this->table('locals_usuarios');
        $this->displayField('local_id');
        $this->primaryKey(['local_id', 'usuario_id']);

        $this->belongsTo('Locals', [
            'foreignKey' => 'local_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
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
        $rules->add($rules->existsIn(['local_id'], 'Locals'));
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));

        return $rules;
    }
}
