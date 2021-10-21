<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhHistoricoEmpleadosFijos Model
 *
 * @method \App\Model\Entity\MrrhhHistoricoEmpleadosFijo get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhHistoricoEmpleadosFijo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhHistoricoEmpleadosFijo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhHistoricoEmpleadosFijo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhHistoricoEmpleadosFijo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhHistoricoEmpleadosFijo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhHistoricoEmpleadosFijo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhHistoricoEmpleadosFijo findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhHistoricoEmpleadosFijosTable extends Table
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

        $this->setTable('mrrhh_historico_empleados_fijos');
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
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        $validator
            ->integer('mes')
            ->requirePresence('mes', 'create')
            ->notEmptyString('mes');

        $validator
            ->integer('quincena')
            ->requirePresence('quincena', 'create')
            ->notEmptyString('quincena');

        $validator
            ->integer('id_tipo_personal')
            ->requirePresence('id_tipo_personal', 'create')
            ->notEmptyString('id_tipo_personal');

        $validator
            ->integer('cedula')
            ->requirePresence('cedula', 'create')
            ->notEmptyString('cedula');

        $validator
            ->scalar('ente_adscrito')
            ->allowEmptyString('ente_adscrito');

        $validator
            ->boolean('status')
            ->allowEmptyString('status');

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
            ->decimal('monto_becas')
            ->allowEmptyString('monto_becas');

        $validator
            ->boolean('prima_hogar')
            ->allowEmptyString('prima_hogar');

        $validator
            ->decimal('monto_hogar')
            ->allowEmptyString('monto_hogar');

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
            ->decimal('monto_funeraria')
            ->allowEmptyString('monto_funeraria');

        $validator
            ->boolean('asociacion_funeraria')
            ->allowEmptyString('asociacion_funeraria');

        $validator
            ->boolean('sindicato')
            ->allowEmptyString('sindicato');

        $validator
            ->decimal('monto_sindicato')
            ->allowEmptyString('monto_sindicato');

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
            ->integer('dias_dejados_c')
            ->allowEmptyString('dias_dejados_c');

        $validator
            ->decimal('ajuste_sueldo')
            ->allowEmptyString('ajuste_sueldo');

        $validator
            ->decimal('ajuste_p_profesion')
            ->allowEmptyString('ajuste_p_profesion');

        $validator
            ->decimal('ajuste_p_antiguedad')
            ->allowEmptyString('ajuste_p_antiguedad');

        $validator
            ->decimal('ajuste_p_hijos')
            ->allowEmptyString('ajuste_p_hijos');

        $validator
            ->decimal('ajuste_p_hogar')
            ->allowEmptyString('ajuste_p_hogar');

        $validator
            ->decimal('ajuste_sso')
            ->allowEmptyString('ajuste_sso');

        $validator
            ->decimal('ajuste_rpe')
            ->allowEmptyString('ajuste_rpe');

        $validator
            ->decimal('ajuste_faov')
            ->allowEmptyString('ajuste_faov');

        $validator
            ->decimal('ajuste_fpj')
            ->allowEmptyString('ajuste_fpj');

        $validator
            ->decimal('ajuste_caja')
            ->allowEmptyString('ajuste_caja');

        $validator
            ->decimal('ajuste_a_sso')
            ->allowEmptyString('ajuste_a_sso');

        $validator
            ->decimal('ajuste_a_rpe')
            ->allowEmptyString('ajuste_a_rpe');

        $validator
            ->decimal('ajuste_a_faov')
            ->allowEmptyString('ajuste_a_faov');

        $validator
            ->decimal('ajuste_a_fpj')
            ->allowEmptyString('ajuste_a_fpj');

        $validator
            ->decimal('ajuste_a_caja')
            ->allowEmptyString('ajuste_a_caja');

        $validator
            ->boolean('procesado')
            ->allowEmptyString('procesado');

        $validator
            ->integer('omitida')
            ->notEmptyString('omitida');

        return $validator;
    }
}
