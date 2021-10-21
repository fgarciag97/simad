<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EjecucionRequisicionCompra Model
 *
 * @method \App\Model\Entity\EjecucionRequisicionCompra get($primaryKey, $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionCompra newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionCompra[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionCompra|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionCompra saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionCompra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionCompra[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EjecucionRequisicionCompra findOrCreate($search, callable $callback = null, $options = [])
 */
class EjecucionRequisicionCompraTable extends Table
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

        $this->setTable('ejecucion_requisicion_compra');
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
