<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewMrrhhRequisicion Model
 *
 * @method \App\Model\Entity\ViewMrrhhRequisicion get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicion findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewMrrhhRequisicionTable extends Table
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

        $this->setTable('view_mrrhh_requisicion');
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
            ->scalar('tipo')
            ->allowEmptyString('tipo');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

        $validator
            ->scalar('concepto')
            ->allowEmptyString('concepto');

        $validator
            ->scalar('tipo_porcentaje')
            ->allowEmptyString('tipo_porcentaje');

        $validator
            ->scalar('porcentaje')
            ->allowEmptyString('porcentaje');

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
            ->boolean('prima_profesion')
            ->allowEmptyString('prima_profesion');

        $validator
            ->boolean('prima_hogar')
            ->allowEmptyString('prima_hogar');

        $validator
            ->boolean('prima_hijos')
            ->allowEmptyString('prima_hijos');

        $validator
            ->boolean('prima_antiguedad')
            ->allowEmptyString('prima_antiguedad');

        $validator
            ->boolean('sso')
            ->allowEmptyString('sso');

        $validator
            ->boolean('rpe')
            ->allowEmptyString('rpe');

        $validator
            ->boolean('faov')
            ->allowEmptyString('faov');

        $validator
            ->boolean('fjp')
            ->allowEmptyString('fjp');

        $validator
            ->boolean('caja_ahorro')
            ->allowEmptyString('caja_ahorro');

        $validator
            ->boolean('acofjam')
            ->allowEmptyString('acofjam');

        $validator
            ->boolean('asociacion_funeraria')
            ->allowEmptyString('asociacion_funeraria');

        $validator
            ->boolean('depositario_judicial')
            ->allowEmptyString('depositario_judicial');

        $validator
            ->boolean('beca_escolar_inicial')
            ->allowEmptyString('beca_escolar_inicial');

        $validator
            ->boolean('beca_escolar_primaria')
            ->allowEmptyString('beca_escolar_primaria');

        $validator
            ->boolean('beca_escolar_secundaria')
            ->allowEmptyString('beca_escolar_secundaria');

        $validator
            ->boolean('beca_escolar_universitaria')
            ->allowEmptyString('beca_escolar_universitaria');

        $validator
            ->boolean('beca_escolar_discapacidad')
            ->allowEmptyString('beca_escolar_discapacidad');

        $validator
            ->integer('numero_orden_pago')
            ->allowEmptyString('numero_orden_pago');

        $validator
            ->scalar('concepto_mod')
            ->allowEmptyString('concepto_mod');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        $validator
            ->scalar('concepto2')
            ->allowEmptyString('concepto2');

        $validator
            ->decimal('monto2')
            ->allowEmptyString('monto2');

        $validator
            ->scalar('tipo_porcentaje2')
            ->allowEmptyString('tipo_porcentaje2');

        $validator
            ->scalar('concepto3')
            ->allowEmptyString('concepto3');

        $validator
            ->decimal('monto3')
            ->allowEmptyString('monto3');

        $validator
            ->scalar('tipo_porcentaje3')
            ->allowEmptyString('tipo_porcentaje3');

        $validator
            ->scalar('concepto4')
            ->allowEmptyString('concepto4');

        $validator
            ->decimal('monto4')
            ->allowEmptyString('monto4');

        $validator
            ->scalar('tipo_porcentaje4')
            ->allowEmptyString('tipo_porcentaje4');

        return $validator;
    }
}
