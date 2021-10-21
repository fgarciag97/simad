<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EjecucionRequisicionNomina Model
 *
 * @method \App\Model\Entity\EjecucionRequisicionNomina get($primaryKey, $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionNomina newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionNomina[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionNomina|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionNomina saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionNomina patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionNomina[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionNomina findOrCreate($search, callable $callback = null, $options = [])
 */
class EjecucionRequisicionNominaTable extends Table
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

        $this->setTable('ejecucion_requisicion_nomina');
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
            ->integer('id_requisicion')
            ->requirePresence('id_requisicion', 'create')
            ->notEmptyString('id_requisicion');

        $validator
            ->scalar('partida')
            ->requirePresence('partida', 'create')
            ->notEmptyString('partida');

        $validator
            ->scalar('denominacion')
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        $validator
            ->decimal('monto_comprometer')
            ->requirePresence('monto_comprometer', 'create')
            ->notEmptyString('monto_comprometer');

        $validator
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        $validator
            ->date('fecha')
            ->notEmptyDate('fecha');

        return $validator;
    }
}
