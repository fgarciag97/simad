<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewMrrhhHistAmDirectivos Model
 *
 * @method \App\Model\Entity\ViewMrrhhHistAmDirectivo get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewMrrhhHistAmDirectivo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhHistAmDirectivo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhHistAmDirectivo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewMrrhhHistAmDirectivo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewMrrhhHistAmDirectivo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhHistAmDirectivo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhHistAmDirectivo findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewMrrhhHistAmDirectivosTable extends Table
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

        $this->setTable('view_mrrhh_hist_am_directivos');
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
            ->integer('ano')
            ->allowEmptyString('ano');

        $validator
            ->integer('mes')
            ->allowEmptyString('mes');

        $validator
            ->integer('quincena')
            ->allowEmptyString('quincena');

        $validator
            ->integer('id_tipo_personal')
            ->allowEmptyString('id_tipo_personal');

        $validator
            ->integer('cedula')
            ->allowEmptyString('cedula');

        $validator
            ->scalar('ente_adscrito')
            ->allowEmptyString('ente_adscrito');

        $validator
            ->scalar('nombres')
            ->maxLength('nombres', 255)
            ->allowEmptyString('nombres');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 255)
            ->allowEmptyString('apellidos');

        $validator
            ->boolean('status')
            ->allowEmptyString('status');

        $validator
            ->scalar('correo')
            ->allowEmptyString('correo');

        $validator
            ->date('fecha_ingreso_institucion')
            ->allowEmptyDate('fecha_ingreso_institucion');

        $validator
            ->date('fecha_egreso_institucion')
            ->allowEmptyDate('fecha_egreso_institucion');

        $validator
            ->scalar('cargo')
            ->allowEmptyString('cargo');

        $validator
            ->scalar('banco')
            ->allowEmptyString('banco');

        $validator
            ->scalar('numero_cuenta')
            ->allowEmptyString('numero_cuenta');

        $validator
            ->integer('ano_servicio')
            ->allowEmptyString('ano_servicio');

        $validator
            ->integer('anos_institucion')
            ->allowEmptyString('anos_institucion');

        $validator
            ->integer('anos_servicio')
            ->allowEmptyString('anos_servicio');

        $validator
            ->decimal('grado_porcentaje')
            ->allowEmptyString('grado_porcentaje');

        $validator
            ->scalar('grupo')
            ->allowEmptyString('grupo');

        $validator
            ->decimal('sueldo_base')
            ->allowEmptyString('sueldo_base');

        $validator
            ->decimal('sueldo')
            ->allowEmptyString('sueldo');

        $validator
            ->integer('grado_nivel')
            ->allowEmptyString('grado_nivel');

        $validator
            ->scalar('denominacion_grado_nivel')
            ->allowEmptyString('denominacion_grado_nivel');

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
            ->integer('cantidad_beca_inicial')
            ->allowEmptyString('cantidad_beca_inicial');

        $validator
            ->integer('cantidad_beca_primaria')
            ->allowEmptyString('cantidad_beca_primaria');

        $validator
            ->integer('cantidad_beca_secundaria')
            ->allowEmptyString('cantidad_beca_secundaria');

        $validator
            ->integer('cantidad_beca_universitaria')
            ->allowEmptyString('cantidad_beca_universitaria');

        $validator
            ->integer('cantidad_beca_discapacidad')
            ->allowEmptyString('cantidad_beca_discapacidad');

        $validator
            ->boolean('prima_hogar')
            ->allowEmptyString('prima_hogar');

        $validator
            ->boolean('caja_ahorro')
            ->allowEmptyString('caja_ahorro');

        $validator
            ->scalar('prestamo_caja_ahorro')
            ->allowEmptyString('prestamo_caja_ahorro');

        $validator
            ->scalar('dias_dejados_cancelar')
            ->allowEmptyString('dias_dejados_cancelar');

        $validator
            ->boolean('funeraria')
            ->allowEmptyString('funeraria');

        $validator
            ->boolean('asociacion_funeraria')
            ->allowEmptyString('asociacion_funeraria');

        $validator
            ->boolean('sindicato')
            ->allowEmptyString('sindicato');

        $validator
            ->integer('hijos')
            ->allowEmptyString('hijos');

        $validator
            ->decimal('prima_hijos')
            ->allowEmptyString('prima_hijos');

        $validator
            ->integer('antiguedad')
            ->allowEmptyString('antiguedad');

        $validator
            ->decimal('prima_profesion')
            ->allowEmptyString('prima_profesion');

        $validator
            ->decimal('prima_antiguedad')
            ->allowEmptyString('prima_antiguedad');

        $validator
            ->decimal('deduccion_sso')
            ->allowEmptyString('deduccion_sso');

        $validator
            ->decimal('deduccion_rpe')
            ->allowEmptyString('deduccion_rpe');

        $validator
            ->decimal('deduccion_fpj')
            ->allowEmptyString('deduccion_fpj');

        $validator
            ->decimal('depositario_judicial')
            ->allowEmptyString('depositario_judicial');

        $validator
            ->decimal('depositario_judicial_monto')
            ->allowEmptyString('depositario_judicial_monto');

        $validator
            ->decimal('deduccion_caja_ahorro')
            ->allowEmptyString('deduccion_caja_ahorro');

        $validator
            ->decimal('aporte_patronal_asso')
            ->allowEmptyString('aporte_patronal_asso');

        $validator
            ->decimal('aporte_patronal_arpe')
            ->allowEmptyString('aporte_patronal_arpe');

        $validator
            ->decimal('aporte_patronal_afpj')
            ->allowEmptyString('aporte_patronal_afpj');

        $validator
            ->decimal('aporte_patronal_caja_ahorro')
            ->allowEmptyString('aporte_patronal_caja_ahorro');

        $validator
            ->decimal('x_prima_profesion')
            ->allowEmptyString('x_prima_profesion');

        $validator
            ->decimal('x_prima_antiguedad')
            ->allowEmptyString('x_prima_antiguedad');

        $validator
            ->decimal('x_deduccion_sso')
            ->allowEmptyString('x_deduccion_sso');

        $validator
            ->decimal('x_deduccion_rpe')
            ->allowEmptyString('x_deduccion_rpe');

        $validator
            ->decimal('x_deduccion_fpj')
            ->allowEmptyString('x_deduccion_fpj');

        $validator
            ->decimal('x_depositario_judicial')
            ->allowEmptyString('x_depositario_judicial');

        $validator
            ->decimal('x_depositario_judicial_monto')
            ->allowEmptyString('x_depositario_judicial_monto');

        $validator
            ->decimal('x_deduccion_caja_ahorro')
            ->allowEmptyString('x_deduccion_caja_ahorro');

        $validator
            ->decimal('x_aporte_patronal_asso')
            ->allowEmptyString('x_aporte_patronal_asso');

        $validator
            ->decimal('x_aporte_patronal_arpe')
            ->allowEmptyString('x_aporte_patronal_arpe');

        $validator
            ->decimal('x_porte_patronal_afpj')
            ->allowEmptyString('x_porte_patronal_afpj');

        $validator
            ->decimal('x_aporte_patronal_caja_ahorro')
            ->allowEmptyString('x_aporte_patronal_caja_ahorro');

        $validator
            ->boolean('procesado')
            ->allowEmptyString('procesado');

        return $validator;
    }
}
