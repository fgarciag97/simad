<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewTesoreriaLiquidarReporte Model
 *
 * @method \App\Model\Entity\ViewTesoreriaLiquidarReporte get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidarReporte newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidarReporte[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidarReporte|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidarReporte saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidarReporte patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidarReporte[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidarReporte findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewTesoreriaLiquidarReporteTable extends Table
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

        $this->setTable('view_tesoreria_liquidar_reporte');
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
            ->scalar('razon_social')
            ->allowEmptyString('razon_social');

        $validator
            ->date('fecha_pago')
            ->allowEmptyDate('fecha_pago');

        $validator
            ->integer('rif')
            ->allowEmptyString('rif');

        $validator
            ->scalar('letra')
            ->allowEmptyString('letra');

        $validator
            ->date('fecha_facturacion')
            ->allowEmptyDate('fecha_facturacion');

        $validator
            ->scalar('n_factura')
            ->allowEmptyString('n_factura');

        $validator
            ->scalar('n_control')
            ->allowEmptyString('n_control');

        $validator
            ->scalar('n_comprobante')
            ->allowEmptyString('n_comprobante');

        return $validator;
    }
}
