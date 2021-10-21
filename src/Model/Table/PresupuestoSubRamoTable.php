<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PresupuestoSubRamo Model
 *
 * @method \App\Model\Entity\PresupuestoSubRamo get($primaryKey, $options = [])
 * @method \App\Model\Entity\PresupuestoSubRamo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PresupuestoSubRamo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoSubRamo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoSubRamo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoSubRamo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoSubRamo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoSubRamo findOrCreate($search, callable $callback = null, $options = [])
 */
class PresupuestoSubRamoTable extends Table
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

        $this->setTable('presupuesto_sub_ramo');
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
            ->integer('id_ramo')
            ->requirePresence('id_ramo', 'create')
            ->notEmptyString('id_ramo');

        $validator
            ->scalar('sub_ramo')
            ->requirePresence('sub_ramo', 'create')
            ->notEmptyString('sub_ramo');

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
