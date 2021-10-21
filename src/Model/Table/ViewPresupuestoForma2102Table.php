<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewPresupuestoForma2102 Model
 *
 * @method \App\Model\Entity\ViewPresupuestoForma2102 get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2102 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2102[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2102|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2102 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2102 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2102[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2102 findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewPresupuestoForma2102Table extends Table
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

        $this->setTable('view_presupuesto_forma2102');
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
            ->integer('ano')
            ->allowEmptyString('ano');

        $validator
            ->boolean('tipo_ingreso')
            ->allowEmptyString('tipo_ingreso');

        $validator
            ->integer('id_ramo')
            ->allowEmptyString('id_ramo');

        $validator
            ->scalar('ramo')
            ->allowEmptyString('ramo');

        $validator
            ->scalar('ramo_denominacion')
            ->allowEmptyString('ramo_denominacion');

        $validator
            ->decimal('monto_ramo')
            ->allowEmptyString('monto_ramo');

        $validator
            ->integer('id_sub_ramo')
            ->allowEmptyString('id_sub_ramo');

        $validator
            ->scalar('sub_ramo')
            ->allowEmptyString('sub_ramo');

        $validator
            ->scalar('sub_ramo_denominacion')
            ->allowEmptyString('sub_ramo_denominacion');

        $validator
            ->decimal('monto_sub_ramo')
            ->allowEmptyString('monto_sub_ramo');

        $validator
            ->integer('id_especifico')
            ->allowEmptyString('id_especifico');

        $validator
            ->scalar('especifico')
            ->allowEmptyString('especifico');

        $validator
            ->scalar('especifico_denominacion')
            ->allowEmptyString('especifico_denominacion');

        $validator
            ->decimal('monto_especifico')
            ->allowEmptyString('monto_especifico');

        $validator
            ->integer('id_sub_especifico')
            ->allowEmptyString('id_sub_especifico');

        $validator
            ->scalar('sub_especifico')
            ->allowEmptyString('sub_especifico');

        $validator
            ->scalar('sub_especifico_denominacion')
            ->allowEmptyString('sub_especifico_denominacion');

        $validator
            ->decimal('monto_b_especifico')
            ->allowEmptyString('monto_b_especifico');

        $validator
            ->integer('ordinal')
            ->allowEmptyString('ordinal');

        $validator
            ->scalar('ordinald')
            ->allowEmptyString('ordinald');

        $validator
            ->scalar('ordinald_denominacion')
            ->allowEmptyString('ordinald_denominacion');

        $validator
            ->decimal('monto_ordinald')
            ->allowEmptyString('monto_ordinald');

        $validator
            ->scalar('concatenado')
            ->allowEmptyString('concatenado');

        return $validator;
    }
}
