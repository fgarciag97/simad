<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhPersonal Model
 *
 * @method \App\Model\Entity\MrrhhPersonal get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhPersonal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhPersonal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhPersonal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhPersonal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhPersonal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhPersonal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhPersonal findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhPersonalTable extends Table
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

        $this->setTable('mrrhh_personal');
        $this->setDisplayField('cedula');
        $this->setPrimaryKey('cedula');
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
            ->allowEmptyString('cedula', null, 'create');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 255)
            ->requirePresence('apellidos', 'create')
            ->notEmptyString('apellidos');

        $validator
            ->scalar('nombres')
            ->maxLength('nombres', 255)
            ->requirePresence('nombres', 'create')
            ->notEmptyString('nombres');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->allowEmptyString('photo');

        $validator
            ->scalar('photo_dir')
            ->maxLength('photo_dir', 255)
            ->allowEmptyString('photo_dir');

        $validator
            ->date('fecha_ingreso_institucion')
            ->requirePresence('fecha_ingreso_institucion', 'create')
            ->notEmptyDate('fecha_ingreso_institucion');

        $validator
            ->date('fecha_egreso_institucion')
            ->allowEmptyDate('fecha_egreso_institucion');

        $validator
            ->integer('ano_servicio')
            ->notEmptyString('ano_servicio');

        $validator
            ->scalar('direccion')
            ->allowEmptyString('direccion');

        $validator
            ->scalar('telefono')
            ->allowEmptyString('telefono');

        $validator
            ->scalar('rif')
            ->allowEmptyString('rif');

        $validator
            ->scalar('correo')
            ->allowEmptyString('correo');

        $validator
            ->boolean('status')
            ->allowEmptyString('status');

        $validator
            ->scalar('genero')
            ->allowEmptyString('genero');

        $validator
            ->integer('grado')
            ->requirePresence('grado', 'create')
            ->notEmptyString('grado');

        $validator
            ->integer('ente_adscrito')
            ->allowEmptyString('ente_adscrito');

        $validator
            ->integer('hijos')
            ->allowEmptyString('hijos');

        $validator
            ->scalar('estado_civil')
            ->allowEmptyString('estado_civil');

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
            ->boolean('prima_hogar')
            ->allowEmptyString('prima_hogar');

        $validator
            ->boolean('caja_ahorro')
            ->allowEmptyString('caja_ahorro');

        $validator
            ->decimal('porcentaje_caja')
            ->notEmptyString('porcentaje_caja');

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

        return $validator;
    }
}
