<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewMrrhhObrerosFijos Model
 *
 * @method \App\Model\Entity\ViewMrrhhObrerosFijo get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewMrrhhObrerosFijo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhObrerosFijo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhObrerosFijo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewMrrhhObrerosFijo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewMrrhhObrerosFijo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhObrerosFijo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhObrerosFijo findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewMrrhhObrerosFijosTable extends Table
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

        $this->setTable('view_mrrhh_obreros_fijos');
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
            ->integer('cedula')
            ->allowEmptyString('cedula');

        $validator
            ->integer('tipo_personal')
            ->allowEmptyString('tipo_personal');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 255)
            ->allowEmptyString('apellidos');

        $validator
            ->scalar('nombres')
            ->maxLength('nombres', 255)
            ->allowEmptyString('nombres');

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
            ->numeric('anos_institucion')
            ->allowEmptyString('anos_institucion');

        $validator
            ->integer('ano_servicio')
            ->allowEmptyString('ano_servicio');

        $validator
            ->scalar('banco')
            ->allowEmptyString('banco');

        $validator
            ->scalar('numero_cuenta')
            ->allowEmptyString('numero_cuenta');

        $validator
            ->scalar('prestamo_caja_ahorro')
            ->allowEmptyString('prestamo_caja_ahorro');

        $validator
            ->scalar('dias_dejados_cancelar')
            ->allowEmptyString('dias_dejados_cancelar');

        $validator
            ->decimal('grado_porcentaje')
            ->allowEmptyString('grado_porcentaje');

        $validator
            ->scalar('grupo')
            ->allowEmptyString('grupo');

        $validator
            ->scalar('cargo')
            ->allowEmptyString('cargo');

        $validator
            ->decimal('sueldo_base')
            ->allowEmptyString('sueldo_base');

        $validator
            ->integer('grado_nivel')
            ->allowEmptyString('grado_nivel');

        $validator
            ->decimal('depositario_judicial')
            ->allowEmptyString('depositario_judicial');

        $validator
            ->decimal('depositario_judicial_monto')
            ->allowEmptyString('depositario_judicial_monto');

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
            ->decimal('porcentaje_caja')
            ->allowEmptyString('porcentaje_caja');

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
            ->scalar('ente_adscrito')
            ->allowEmptyString('ente_adscrito');

        $validator
            ->numeric('antiguedad')
            ->allowEmptyString('antiguedad');

        return $validator;
    }
}
