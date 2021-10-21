<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhRequisicion Model
 *
 * @method \App\Model\Entity\MrrhhRequisicion get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhRequisicion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhRequisicion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhRequisicion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhRequisicion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhRequisicion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhRequisicion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhRequisicion findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhRequisicionTable extends Table
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

        $this->setTable('mrrhh_requisicion');
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
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        $validator
            ->integer('mes')
            ->allowEmptyString('mes');

        $validator
            ->integer('quincena')
            ->allowEmptyString('quincena');

        $validator
            ->integer('id_tipo_personal')
            ->requirePresence('id_tipo_personal', 'create')
            ->notEmptyString('id_tipo_personal');

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
            ->scalar('concepto_mod')
            ->allowEmptyString('concepto_mod');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        $validator
            ->scalar('tipo_porcentaje')
            ->allowEmptyString('tipo_porcentaje');

        $validator
            ->scalar('porcentaje')
            ->allowEmptyString('porcentaje');

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
            ->integer('numero_orden_pago_ord')
            ->allowEmptyString('numero_orden_pago_ord');

        $validator
            ->scalar('partida')
            ->allowEmptyString('partida');

        $validator
            ->scalar('denominacion')
            ->allowEmptyString('denominacion');

        $validator
            ->scalar('omitida')
            ->allowEmptyString('omitida');

        $validator
            ->date('desde')
            ->allowEmptyDate('desde');


        $validator
            ->date('hasta')
            ->allowEmptyDate('hasta');

        return $validator;
    }
}
