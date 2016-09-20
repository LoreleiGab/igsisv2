<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProjetoEspecials Model
 *
 * @property \Cake\ORM\Association\HasMany $EventoInternos
 * @property \Cake\ORM\Association\HasMany $Eventos
 *
 * @method \App\Model\Entity\ProjetoEspecial get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProjetoEspecial newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProjetoEspecial[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProjetoEspecial|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjetoEspecial patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProjetoEspecial[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProjetoEspecial findOrCreate($search, callable $callback = null)
 */
class ProjetoEspecialsTable extends Table
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

        $this->table('projeto_especials');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('EventoInternos', [
            'foreignKey' => 'projeto_especial_id'
        ]);
        $this->hasMany('Eventos', [
            'foreignKey' => 'projeto_especial_id'
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
            ->requirePresence('projeto_especial', 'create')
            ->notEmpty('projeto_especial')
            ->add('projeto_especial', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('idInstituicao')
            ->allowEmpty('idInstituicao');

        $validator
            ->integer('publicado')
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
        $rules->add($rules->isUnique(['projeto_especial']));

        return $rules;
    }
}
