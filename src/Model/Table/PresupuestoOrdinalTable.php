<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PresupuestoOrdinal Model
 *
 * @method \App\Model\Entity\PresupuestoOrdinal get($primaryKey, $options = [])
 * @method \App\Model\Entity\PresupuestoOrdinal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PresupuestoOrdinal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoOrdinal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoOrdinal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoOrdinal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoOrdinal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoOrdinal findOrCreate($search, callable $callback = null, $options = [])
 */
class PresupuestoOrdinalTable extends Table
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

        $this->setTable('presupuesto_ordinal');
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
            ->integer('id_sub_especifico')
            ->allowEmptyString('id_sub_especifico');

        $validator
            ->scalar('ordinal')
            ->requirePresence('ordinal', 'create')
            ->notEmptyString('ordinal');

        $validator
            ->scalar('descripcion')
            ->allowEmptyString('descripcion');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        $validator
            ->boolean('resolucion')
            ->notEmptyString('resolucion');

        $validator
            ->integer('n_resolucion')
            ->notEmptyString('n_resolucion');

        return $validator;
    }
}
