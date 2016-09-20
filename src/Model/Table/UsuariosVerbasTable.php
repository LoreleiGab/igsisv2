<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsuariosVerbas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Verbas
 * @property \Cake\ORM\Association\BelongsTo $Usuarios
 *
 * @method \App\Model\Entity\UsuariosVerba get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsuariosVerba newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UsuariosVerba[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsuariosVerba|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsuariosVerba patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsuariosVerba[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsuariosVerba findOrCreate($search, callable $callback = null)
 */
class UsuariosVerbasTable extends Table
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

        $this->table('usuarios_verbas');
        $this->displayField('verba_id');
        $this->primaryKey(['verba_id', 'usuario_id']);

        $this->belongsTo('Verbas', [
            'foreignKey' => 'verba_id',
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
        $rules->add($rules->existsIn(['verba_id'], 'Verbas'));
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));

        return $rules;
    }
}
