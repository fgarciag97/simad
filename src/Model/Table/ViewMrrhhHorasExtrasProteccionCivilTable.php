<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewMrrhhHorasExtrasProteccionCivil Model
 *
 * @method \App\Model\Entity\ViewMrrhhHorasExtrasProteccionCivil get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewMrrhhHorasExtrasProteccionCivil newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhHorasExtrasProteccionCivil[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhHorasExtrasProteccionCivil|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewMrrhhHorasExtrasProteccionCivil saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewMrrhhHorasExtrasProteccionCivil patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhHorasExtrasProteccionCivil[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhHorasExtrasProteccionCivil findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewMrrhhHorasExtrasProteccionCivilTable extends Table
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

        $this->setTable('view_mrrhh_horas_extras_proteccion_civil');
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
            ->integer('id_tipo_personal')
            ->allowEmptyString('id_tipo_personal');

        $validator
            ->integer('cedula')
            ->allowEmptyString('cedula');

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
            ->scalar('cargo_pc')
            ->allowEmptyString('cargo_pc');

        $validator
            ->integer('cantidad_dias')
            ->allowEmptyString('cantidad_dias');

        $validator
            ->integer('dias_no_laborables')
            ->allowEmptyString('dias_no_laborables');

        $validator
            ->integer('cantidad_horas')
            ->allowEmptyString('cantidad_horas');

        $validator
            ->integer('cantidad_horas_extra_diurnas')
            ->allowEmptyString('cantidad_horas_extra_diurnas');

        $validator
            ->integer('cantidad_horas_extra_nocturnas')
            ->allowEmptyString('cantidad_horas_extra_nocturnas');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        $validator
            ->boolean('procesado')
            ->allowEmptyString('procesado');

        return $validator;
    }
}
