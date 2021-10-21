<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhCargosEmpleadosContratados Model
 *
 * @method \App\Model\Entity\MrrhhCargosEmpleadosContratado get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhCargosEmpleadosContratado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosEmpleadosContratado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosEmpleadosContratado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhCargosEmpleadosContratado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhCargosEmpleadosContratado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosEmpleadosContratado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosEmpleadosContratado findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhCargosEmpleadosContratadosTable extends Table
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

        $this->setTable('mrrhh_cargos_empleados_contratados');
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
