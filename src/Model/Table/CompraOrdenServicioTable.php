<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CompraOrdenServicio Model
 *
 * @method \App\Model\Entity\CompraOrdenServicio get($primaryKey, $options = [])
 * @method \App\Model\Entity\CompraOrdenServicio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CompraOrdenServicio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CompraOrdenServicio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompraOrdenServicio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompraOrdenServicio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CompraOrdenServicio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CompraOrdenServicio findOrCreate($search, callable $callback = null, $options = [])
 */
class CompraOrdenServicioTable extends Table
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

        $this->setTable('compra_orden_servicio');
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
            ->integer('requisicion')
            ->requirePresence('requisicion', 'create')
            ->notEmptyString('requisicion');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        $validator
            ->integer('proveedor')
            ->requirePresence('proveedor', 'create')
            ->notEmptyString('proveedor');

        $validator
            ->scalar('descripcion_ordena')
            ->requirePresence('descripcion_ordena', 'create')
            ->notEmptyString('descripcion_ordena');

        $validator
            ->scalar('descripcion_ordena_mod')
            ->allowEmptyString('descripcion_ordena_mod');

        return $validator;
    }
}
