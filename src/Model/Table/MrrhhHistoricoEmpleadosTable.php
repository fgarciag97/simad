<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhHistoricoEmpleados Model
 *
 * @method \App\Model\Entity\MrrhhHistoricoEmpleado get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhHistoricoEmpleado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhHistoricoEmpleado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhHistoricoEmpleado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhHistoricoEmpleado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhHistoricoEmpleado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhHistoricoEmpleado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhHistoricoEmpleado findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhHistoricoEmpleadosTable extends Table
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

        $this->setTable('mrrhh_historico_empleados');
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

        return $validator;
    }
}
