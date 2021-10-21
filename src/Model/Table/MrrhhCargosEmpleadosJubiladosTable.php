<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhCargosEmpleadosJubilados Model
 *
 * @method \App\Model\Entity\MrrhhCargosEmpleadosJubilado get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhCargosEmpleadosJubilado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosEmpleadosJubilado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosEmpleadosJubilado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhCargosEmpleadosJubilado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhCargosEmpleadosJubilado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosEmpleadosJubilado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosEmpleadosJubilado findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhCargosEmpleadosJubiladosTable extends Table
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

        $this->setTable('mrrhh_cargos_empleados_jubilados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('denominacion')
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        return $validator;
    }
}
