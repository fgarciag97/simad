<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhPensionadosEspecialesEmpleados Model
 *
 * @method \App\Model\Entity\MrrhhPensionadosEspecialesEmpleado get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhPensionadosEspecialesEmpleado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhPensionadosEspecialesEmpleado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhPensionadosEspecialesEmpleado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhPensionadosEspecialesEmpleado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhPensionadosEspecialesEmpleado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhPensionadosEspecialesEmpleado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhPensionadosEspecialesEmpleado findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhPensionadosEspecialesEmpleadosTable extends Table
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

        $this->setTable('mrrhh_pensionados_especiales_empleados');
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
            ->integer('tipo_nomina')
            ->requirePresence('tipo_nomina', 'create')
            ->notEmptyString('tipo_nomina');

        $validator
            ->integer('tipo_personal')
            ->requirePresence('tipo_personal', 'create')
            ->notEmptyString('tipo_personal');

        $validator
            ->integer('nivel')
            ->notEmptyString('nivel');

        $validator
            ->integer('grado_nivel')
            ->requirePresence('grado_nivel', 'create')
            ->notEmptyString('grado_nivel');

        $validator
            ->integer('cargo')
            ->requirePresence('cargo', 'create')
            ->notEmptyString('cargo');

        $validator
            ->scalar('banco')
            ->requirePresence('banco', 'create')
            ->notEmptyString('banco');

        $validator
            ->scalar('numero_cuenta')
            ->requirePresence('numero_cuenta', 'create')
            ->notEmptyString('numero_cuenta');

        $validator
            ->scalar('prestamo_caja_ahorro')
            ->allowEmptyString('prestamo_caja_ahorro');

        $validator
            ->scalar('dias_dejados_cancelar')
            ->allowEmptyString('dias_dejados_cancelar');

        $validator
            ->decimal('depositario_judicial')
            ->allowEmptyString('depositario_judicial');

        $validator
            ->decimal('depositario_judicial_monto')
            ->allowEmptyString('depositario_judicial_monto');

        $validator
            ->decimal('sueldo')
            ->notEmptyString('sueldo');

        return $validator;
    }
}
