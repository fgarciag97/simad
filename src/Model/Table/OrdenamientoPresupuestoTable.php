<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrdenamientoPresupuesto Model
 *
 * @method \App\Model\Entity\OrdenamientoPresupuesto get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrdenamientoPresupuesto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OrdenamientoPresupuesto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrdenamientoPresupuesto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrdenamientoPresupuesto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrdenamientoPresupuesto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrdenamientoPresupuesto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrdenamientoPresupuesto findOrCreate($search, callable $callback = null, $options = [])
 */
class OrdenamientoPresupuestoTable extends Table
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

        $this->setTable('ordenamiento_presupuesto');
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
            ->scalar('n_factura')
            ->requirePresence('n_factura', 'create')
            ->notEmptyString('n_factura');

        $validator
            ->scalar('n_control')
            ->requirePresence('n_control', 'create')
            ->notEmptyString('n_control');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->integer('tipo_calculo')
            ->requirePresence('tipo_calculo', 'create')
            ->notEmptyString('tipo_calculo');

        $validator
            ->decimal('bs')
            ->allowEmptyString('bs');

        $validator
            ->decimal('tipo_porcentaje')
            ->allowEmptyString('tipo_porcentaje');

        $validator
            ->decimal('neto')
            ->requirePresence('neto', 'create')
            ->notEmptyString('neto');

        $validator
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        return $validator;
    }
}
