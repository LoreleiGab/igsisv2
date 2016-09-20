<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Modulos Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Usuarios
 *
 * @method \App\Model\Entity\Modulo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Modulo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Modulo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Modulo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Modulo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Modulo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Modulo findOrCreate($search, callable $callback = null)
 */
class ModulosTable extends Table
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

        $this->table('modulos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Usuarios', [
            'foreignKey' => 'modulo_id',
            'targetForeignKey' => 'usuario_id',
            'joinTable' => 'modulos_usuarios'
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
            ->requirePresence('modulo', 'create')
            ->notEmpty('modulo');

        $validator
            ->allowEmpty('link_pagina');

        $validator
            ->allowEmpty('descricao');

        return $validator;
    }
}
