<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewEjecucionTransferencia Model
 *
 * @method \App\Model\Entity\ViewEjecucionTransferencium get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewEjecucionTransferencium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewEjecucionTransferencium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewEjecucionTransferencium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewEjecucionTransferencium saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewEjecucionTransferencium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewEjecucionTransferencium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewEjecucionTransferencium findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewEjecucionTransferenciaTable extends Table
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

        $this->setTable('view_ejecucion_transferencia');
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
            ->integer('status')
            ->allowEmptyString('status');

        $validator
            ->date('fecha')
            ->allowEmptyDate('fecha');

        $validator
            ->integer('ano')
            ->allowEmptyString('ano');

        $validator
            ->scalar('beneficiario')
            ->allowEmptyString('beneficiario');

        $validator
            ->scalar('letra')
            ->allowEmptyString('letra');

        $validator
            ->integer('cedula')
            ->allowEmptyString('cedula');

        $validator
            ->scalar('descripcion_ordena')
            ->allowEmptyString('descripcion_ordena');

        $validator
            ->decimal('total')
            ->allowEmptyString('total');

        $validator
            ->scalar('descripcion_ordena_mod')
            ->allowEmptyString('descripcion_ordena_mod');

        return $validator;
    }
}
