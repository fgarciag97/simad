<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewMrrhhRequisicionServicios Model
 *
 * @method \App\Model\Entity\ViewMrrhhRequisicionServicio get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicionServicio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicionServicio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicionServicio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicionServicio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicionServicio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicionServicio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicionServicio findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewMrrhhRequisicionServiciosTable extends Table
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

        $this->setTable('view_mrrhh_requisicion_servicios');
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
            ->integer('ano')
            ->allowEmptyString('ano');

        $validator
            ->integer('mes')
            ->allowEmptyString('mes');

        $validator
            ->scalar('mes_denominacion')
            ->maxLength('mes_denominacion', 20)
            ->allowEmptyString('mes_denominacion');

        $validator
            ->integer('quincena')
            ->allowEmptyString('quincena');

        $validator
            ->scalar('quincena_denominacion')
            ->maxLength('quincena_denominacion', 30)
            ->allowEmptyString('quincena_denominacion');

        $validator
            ->integer('id_tipo_personal')
            ->allowEmptyString('id_tipo_personal');

        $validator
            ->scalar('tipo_personal_denominacion')
            ->allowEmptyString('tipo_personal_denominacion');

        $validator
            ->scalar('concepto')
            ->allowEmptyString('concepto');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        $validator
            ->integer('numero_orden_pago')
            ->allowEmptyString('numero_orden_pago');

        $validator
            ->scalar('concepto_mod')
            ->allowEmptyString('concepto_mod');

        $validator
            ->integer('numero_orden_pago_ord')
            ->allowEmptyString('numero_orden_pago_ord');

        $validator
            ->date('fecha_rrhh')
            ->allowEmptyDate('fecha_rrhh');

        $validator
            ->time('hora_rrhh')
            ->allowEmptyTime('hora_rrhh');

        $validator
            ->date('fecha_ejecucion')
            ->allowEmptyDate('fecha_ejecucion');

        $validator
            ->time('hora_ejecucion')
            ->allowEmptyTime('hora_ejecucion');

        $validator
            ->date('fecha_ordenamiento')
            ->allowEmptyDate('fecha_ordenamiento');

        $validator
            ->time('hora_ordenamiento')
            ->allowEmptyTime('hora_ordenamiento');

        $validator
            ->date('fecha_tesoreria')
            ->allowEmptyDate('fecha_tesoreria');

        $validator
            ->time('hora_tesoreria')
            ->allowEmptyTime('hora_tesoreria');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

        $validator
            ->scalar('letra')
            ->allowEmptyString('letra');

        $validator
            ->integer('rif')
            ->allowEmptyString('rif');

        $validator
            ->scalar('beneficiario')
            ->allowEmptyString('beneficiario');

        return $validator;
    }
}
