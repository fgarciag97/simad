<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewTesoreriaLiquidarReporteCalculo Model
 *
 * @method \App\Model\Entity\ViewTesoreriaLiquidarReporteCalculo get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidarReporteCalculo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidarReporteCalculo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidarReporteCalculo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidarReporteCalculo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidarReporteCalculo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidarReporteCalculo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewTesoreriaLiquidarReporteCalculo findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewTesoreriaLiquidarReporteCalculoTable extends Table
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

        $this->setTable('view_tesoreria_liquidar_reporte_calculo');
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
            ->integer('id_requisicion')
            ->allowEmptyString('id_requisicion');

        $validator
            ->date('fecha')
            ->allowEmptyDate('fecha');

        $validator
            ->scalar('n_factura')
            ->allowEmptyString('n_factura');

        $validator
            ->scalar('n_control')
            ->allowEmptyString('n_control');

        $validator
            ->scalar('tipo_calculo')
            ->allowEmptyString('tipo_calculo');

        $validator
            ->decimal('base_imponible')
            ->allowEmptyString('base_imponible');

        $validator
            ->decimal('total')
            ->allowEmptyString('total');

        $validator
            ->integer('porcentaje')
            ->allowEmptyString('porcentaje');

        $validator
            ->decimal('impuesto')
            ->allowEmptyString('impuesto');

        return $validator;
    }
}
