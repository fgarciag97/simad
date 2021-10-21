<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewOrdenamientoCompra Model
 *
 * @method \App\Model\Entity\ViewOrdenamientoCompra get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewOrdenamientoCompra newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewOrdenamientoCompra[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewOrdenamientoCompra|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewOrdenamientoCompra saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewOrdenamientoCompra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewOrdenamientoCompra[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewOrdenamientoCompra findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewOrdenamientoCompraTable extends Table
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

        $this->setTable('view_ordenamiento_compra');
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
            ->integer('id_requisicion')
            ->allowEmptyString('id_requisicion');

        $validator
            ->scalar('n_factura')
            ->allowEmptyString('n_factura');

        $validator
            ->scalar('n_control')
            ->allowEmptyString('n_control');

        $validator
            ->date('fecha')
            ->allowEmptyDate('fecha');

        $validator
            ->scalar('tipo_calculo')
            ->allowEmptyString('tipo_calculo');

        $validator
            ->decimal('bs')
            ->allowEmptyString('bs');

        $validator
            ->decimal('tipo_porcentaje')
            ->allowEmptyString('tipo_porcentaje');

        $validator
            ->decimal('neto')
            ->allowEmptyString('neto');

        $validator
            ->integer('ano')
            ->allowEmptyString('ano');

        return $validator;
    }
}
