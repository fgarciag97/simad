<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewEjecucionRequisicionNomina Model
 *
 * @method \App\Model\Entity\ViewEjecucionRequisicionNomina get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionNomina newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionNomina[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionNomina|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionNomina saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionNomina patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionNomina[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewEjecucionRequisicionNomina findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewEjecucionRequisicionNominaTable extends Table
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

        $this->setTable('view_ejecucion_requisicion_nomina');
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
            ->integer('id_requisicion')
            ->allowEmptyString('id_requisicion');

        $validator
            ->integer('id_partida')
            ->allowEmptyString('id_partida');

        $validator
            ->scalar('denominacion_partida')
            ->allowEmptyString('denominacion_partida');

        $validator
            ->scalar('descripcion_partida')
            ->allowEmptyString('descripcion_partida');

        $validator
            ->decimal('monto_comprometer')
            ->allowEmptyString('monto_comprometer');

        $validator
            ->decimal('monto_disponible')
            ->allowEmptyString('monto_disponible');

        $validator
            ->decimal('monto_restante')
            ->allowEmptyString('monto_restante');

        $validator
            ->integer('ano')
            ->allowEmptyString('ano');

        return $validator;
    }
}
