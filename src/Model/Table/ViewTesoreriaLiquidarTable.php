<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewTesoreriaLiquidar Model
 *
 * @method \App\Model\Entity\ViewTesoreriaLiquidar get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidar newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidar[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidar|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidar saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidar patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidar[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidar findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewTesoreriaLiquidarTable extends Table
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

        $this->setTable('view_tesoreria_liquidar');
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
            ->integer('requisicion')
            ->allowEmptyString('requisicion');

        $validator
            ->date('fecha_facturacion')
            ->allowEmptyDate('fecha_facturacion');

        $validator
            ->date('fecha_pago')
            ->allowEmptyDate('fecha_pago');

        $validator
            ->scalar('tipo')
            ->allowEmptyString('tipo');

        $validator
            ->scalar('razon_social')
            ->allowEmptyString('razon_social');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

        return $validator;
    }
}
