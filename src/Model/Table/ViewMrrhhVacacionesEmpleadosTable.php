<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewMrrhhVacacionesEmpleados Model
 *
 * @method \App\Model\Entity\ViewMrrhhVacacionesEmpleado get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewMrrhhVacacionesEmpleado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhVacacionesEmpleado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhVacacionesEmpleado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewMrrhhVacacionesEmpleado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewMrrhhVacacionesEmpleado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhVacacionesEmpleado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhVacacionesEmpleado findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewMrrhhVacacionesEmpleadosTable extends Table
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

        $this->setTable('view_mrrhh_vacaciones_empleados');
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
            ->scalar('cargo_fijo')
            ->allowEmptyString('cargo_fijo');

        $validator
            ->scalar('cargo_contratado')
            ->allowEmptyString('cargo_contratado');

        $validator
            ->scalar('cargo_directivo')
            ->allowEmptyString('cargo_directivo');

        $validator
            ->date('fecha_salida')
            ->allowEmptyDate('fecha_salida');

        $validator
            ->date('fecha_entrada')
            ->allowEmptyDate('fecha_entrada');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        $validator
            ->boolean('procesado')
            ->allowEmptyString('procesado');

        return $validator;
    }
}
