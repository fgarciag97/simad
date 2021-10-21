<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PresupuestoRamo Model
 *
 * @method \App\Model\Entity\PresupuestoRamo get($primaryKey, $options = [])
 * @method \App\Model\Entity\PresupuestoRamo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PresupuestoRamo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoRamo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoRamo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoRamo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoRamo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoRamo findOrCreate($search, callable $callback = null, $options = [])
 */
class PresupuestoRamoTable extends Table
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

        $this->setTable('presupuesto_ramo');
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
            ->scalar('ramo')
            ->requirePresence('ramo', 'create')
            ->notEmptyString('ramo');

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
