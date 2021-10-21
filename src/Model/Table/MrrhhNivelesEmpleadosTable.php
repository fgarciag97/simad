<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhNivelesEmpleados Model
 *
 * @method \App\Model\Entity\MrrhhNivelesEmpleado get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhNivelesEmpleado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhNivelesEmpleado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhNivelesEmpleado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhNivelesEmpleado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhNivelesEmpleado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhNivelesEmpleado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhNivelesEmpleado findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhNivelesEmpleadosTable extends Table
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

        $this->setTable('mrrhh_niveles_empleados');
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
            ->integer('grupo')
            ->requirePresence('grupo', 'create')
            ->notEmptyString('grupo');

        $validator
            ->scalar('denominacion')
            ->maxLength('denominacion', 5)
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        $validator
            ->decimal('sueldo_base')
            ->requirePresence('sueldo_base', 'create')
            ->notEmptyString('sueldo_base');

        return $validator;
    }
}
