<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhHorasExtrasProteccionCivil Model
 *
 * @method \App\Model\Entity\MrrhhHorasExtrasProteccionCivil get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhHorasExtrasProteccionCivil newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhHorasExtrasProteccionCivil[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhHorasExtrasProteccionCivil|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhHorasExtrasProteccionCivil saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhHorasExtrasProteccionCivil patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhHorasExtrasProteccionCivil[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhHorasExtrasProteccionCivil findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhHorasExtrasProteccionCivilTable extends Table
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

        $this->setTable('mrrhh_horas_extras_proteccion_civil');
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
            ->integer('id_tipo_personal')
            ->requirePresence('id_tipo_personal', 'create')
            ->notEmptyString('id_tipo_personal');

        $validator
            ->integer('cedula')
            ->requirePresence('cedula', 'create')
            ->notEmptyString('cedula');

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
