<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrdenCompra Model
 *
 * @method \App\Model\Entity\OrdenCompra get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrdenCompra newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OrdenCompra[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrdenCompra|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrdenCompra saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrdenCompra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrdenCompra[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrdenCompra findOrCreate($search, callable $callback = null, $options = [])
 */
class OrdenCompraTable extends Table
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

        $this->setTable('orden_compra');
        $this->setDisplayField('requisicion');
        $this->setPrimaryKey('requisicion');
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
            ->allowEmptyString('requisicion', null, 'create');

        $validator
            ->integer('sector')
            ->allowEmptyString('sector');

        $validator
            ->scalar('item')
            ->allowEmptyString('item');

        $validator
            ->scalar('descripcion')
            ->allowEmptyString('descripcion');

        $validator
            ->integer('partida')
            ->allowEmptyString('partida');

        $validator
            ->scalar('unidad')
            ->allowEmptyString('unidad');

        $validator
            ->decimal('cantidad')
            ->allowEmptyString('cantidad');

        $validator
            ->decimal('precio_unitario')
            ->allowEmptyString('precio_unitario');

        $validator
            ->decimal('monto_total')
            ->allowEmptyString('monto_total');

        return $validator;
    }
}
