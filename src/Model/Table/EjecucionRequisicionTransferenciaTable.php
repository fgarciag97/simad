<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EjecucionRequisicionTransferencia Model
 *
 * @method \App\Model\Entity\EjecucionRequisicionTransferencium get($primaryKey, $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionTransferencium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionTransferencium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionTransferencium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionTransferencium saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionTransferencium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionTransferencium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionTransferencium findOrCreate($search, callable $callback = null, $options = [])
 */
class EjecucionRequisicionTransferenciaTable extends Table
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

        $this->setTable('ejecucion_requisicion_transferencia');
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
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->scalar('tipo')
            ->allowEmptyString('tipo');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

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
            ->integer('numero_orden_pago')
            ->allowEmptyString('numero_orden_pago');

        $validator
            ->integer('numero_orden_pago_ord')
            ->allowEmptyString('numero_orden_pago_ord');

        return $validator;
    }
}
