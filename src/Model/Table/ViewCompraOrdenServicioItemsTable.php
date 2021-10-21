<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewCompraOrdenServicioItems Model
 *
 * @method \App\Model\Entity\ViewCompraOrdenServicioItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewCompraOrdenServicioItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewCompraOrdenServicioItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewCompraOrdenServicioItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewCompraOrdenServicioItem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewCompraOrdenServicioItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewCompraOrdenServicioItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewCompraOrdenServicioItem findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewCompraOrdenServicioItemsTable extends Table
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

        $this->setTable('view_compra_orden_servicio_items');
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
            ->integer('id_orden')
            ->allowEmptyString('id_orden');

        $validator
            ->integer('requisicion')
            ->allowEmptyString('requisicion');

        $validator
            ->scalar('unidad_solicitante')
            ->allowEmptyString('unidad_solicitante');

        $validator
            ->scalar('descripcion_item')
            ->allowEmptyString('descripcion_item');

        $validator
            ->integer('cantidad')
            ->allowEmptyString('cantidad');

        $validator
            ->scalar('unidad_medida')
            ->allowEmptyString('unidad_medida');

        $validator
            ->decimal('precio_unitario')
            ->allowEmptyString('precio_unitario');

        $validator
            ->decimal('iva')
            ->allowEmptyString('iva');

        $validator
            ->decimal('sub_total')
            ->allowEmptyString('sub_total');

        $validator
            ->scalar('id_partida')
            ->allowEmptyString('id_partida');

        $validator
            ->scalar('descripcion_partida')
            ->allowEmptyString('descripcion_partida');

        $validator
            ->date('fecha')
            ->allowEmptyDate('fecha');

        $validator
            ->integer('ano')
            ->allowEmptyString('ano');

        return $validator;
    }
}
