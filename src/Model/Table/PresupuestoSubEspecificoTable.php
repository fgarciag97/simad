<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PresupuestoSubEspecifico Model
 *
 * @method \App\Model\Entity\PresupuestoSubEspecifico get($primaryKey, $options = [])
 * @method \App\Model\Entity\PresupuestoSubEspecifico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PresupuestoSubEspecifico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoSubEspecifico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoSubEspecifico saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoSubEspecifico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoSubEspecifico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoSubEspecifico findOrCreate($search, callable $callback = null, $options = [])
 */
class PresupuestoSubEspecificoTable extends Table
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

        $this->setTable('presupuesto_sub_especifico');
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
            ->integer('id_especifico')
            ->allowEmptyString('id_especifico');

        $validator
            ->scalar('sub_especifico')
            ->requirePresence('sub_especifico', 'create')
            ->notEmptyString('sub_especifico');

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
