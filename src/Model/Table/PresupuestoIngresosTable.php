<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PresupuestoIngresos Model
 *
 * @method \App\Model\Entity\PresupuestoIngreso get($primaryKey, $options = [])
 * @method \App\Model\Entity\PresupuestoIngreso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PresupuestoIngreso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoIngreso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoIngreso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoIngreso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoIngreso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoIngreso findOrCreate($search, callable $callback = null, $options = [])
 */
class PresupuestoIngresosTable extends Table
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

        $this->setTable('presupuesto_ingresos');
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
            ->integer('id_sub_ramo')
            ->requirePresence('id_sub_ramo', 'create')
            ->notEmptyString('id_sub_ramo');

        $validator
            ->integer('id_especifico')
            ->requirePresence('id_especifico', 'create')
            ->notEmptyString('id_especifico');

        $validator
            ->integer('id_sub_especifico')
            ->allowEmptyString('id_sub_especifico');

        $validator
            ->integer('id_ordinal')
            ->allowEmptyString('id_ordinal');

        $validator
            ->scalar('descripcion')
            ->allowEmptyString('descripcion');

        $validator
            ->decimal('monto')
            ->requirePresence('monto', 'create')
            ->notEmptyString('monto');

        return $validator;
    }
}
