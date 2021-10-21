<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewEjecucionRequisicionCompra Model
 *
 * @method \App\Model\Entity\ViewEjecucionRequisicionCompra get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionCompra newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionCompra[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionCompra|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionCompra saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionCompra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionCompra[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionCompra findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewEjecucionRequisicionCompraTable extends Table
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

        $this->setTable('view_ejecucion_requisicion_compra');
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
            ->integer('id_requisicion')
            ->allowEmptyString('id_requisicion');

        $validator
            ->integer('id_partida')
            ->allowEmptyString('id_partida');

        $validator
            ->scalar('denominacion_partida')
            ->allowEmptyString('denominacion_partida');

        $validator
            ->scalar('descripcion_partida')
            ->allowEmptyString('descripcion_partida');

        $validator
            ->decimal('monto_comprometer')
            ->allowEmptyString('monto_comprometer');

        $validator
            ->decimal('monto_disponible')
            ->allowEmptyString('monto_disponible');

        $validator
            ->decimal('monto_restante')
            ->allowEmptyString('monto_restante');

        $validator
            ->integer('ano')
            ->allowEmptyString('ano');

        return $validator;
    }
}
