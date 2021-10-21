<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewEjecucionRequisicionTransferencia Model
 *
 * @method \App\Model\Entity\ViewEjecucionRequisicionTransferencium get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionTransferencium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionTransferencium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionTransferencium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionTransferencium saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionTransferencium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionTransferencium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionTransferencium findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewEjecucionRequisicionTransferenciaTable extends Table
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

        $this->setTable('view_ejecucion_requisicion_transferencia');
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
            ->date('fecha')
            ->allowEmptyDate('fecha');

        $validator
            ->integer('mes')
            ->allowEmptyString('mes');

        $validator
            ->scalar('mes_denominacion')
            ->maxLength('mes_denominacion', 20)
            ->allowEmptyString('mes_denominacion');

        $validator
            ->scalar('tipo')
            ->allowEmptyString('tipo');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

        $validator
            ->scalar('beneficiario')
            ->allowEmptyString('beneficiario');

        $validator
            ->decimal('total')
            ->allowEmptyString('total');

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
            ->scalar('numero_orden_pago')
            ->allowEmptyString('numero_orden_pago');

        return $validator;
    }
}
