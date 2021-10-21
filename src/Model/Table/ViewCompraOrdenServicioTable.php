<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewCompraOrdenServicio Model
 *
 * @method \App\Model\Entity\ViewCompraOrdenServicio get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewCompraOrdenServicio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewCompraOrdenServicio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewCompraOrdenServicio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewCompraOrdenServicio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewCompraOrdenServicio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewCompraOrdenServicio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewCompraOrdenServicio findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewCompraOrdenServicioTable extends Table
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

        $this->setTable('view_compra_orden_servicio');
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
            ->allowEmptyString('id');

        $validator
            ->integer('requisicion')
            ->allowEmptyString('requisicion');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

        $validator
            ->date('fecha')
            ->allowEmptyDate('fecha');

        $validator
            ->integer('ano')
            ->allowEmptyString('ano');

        $validator
            ->scalar('proveedor')
            ->allowEmptyString('proveedor');

        $validator
            ->scalar('letra')
            ->allowEmptyString('letra');

        $validator
            ->integer('rif')
            ->allowEmptyString('rif');

        $validator
            ->scalar('descripcion_ordena')
            ->allowEmptyString('descripcion_ordena');

        $validator
            ->decimal('total')
            ->allowEmptyString('total');

        $validator
            ->scalar('descripcion_ordena_mod')
            ->allowEmptyString('descripcion_ordena_mod');

        return $validator;
    }
}
