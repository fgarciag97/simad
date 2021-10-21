<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CompraOrdenComprasItems Model
 *
 * @method \App\Model\Entity\CompraOrdenComprasItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\CompraOrdenComprasItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CompraOrdenComprasItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CompraOrdenComprasItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompraOrdenComprasItem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompraOrdenComprasItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CompraOrdenComprasItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CompraOrdenComprasItem findOrCreate($search, callable $callback = null, $options = [])
 */
class CompraOrdenComprasItemsTable extends Table
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

        $this->setTable('compra_orden_compras_items');
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
            ->integer('id_orden')
            ->requirePresence('id_orden', 'create')
            ->notEmptyString('id_orden');

        $validator
            ->integer('unidad_solicitante')
            ->requirePresence('unidad_solicitante', 'create')
            ->notEmptyString('unidad_solicitante');

        $validator
            ->scalar('descripcion_item')
            ->requirePresence('descripcion_item', 'create')
            ->notEmptyString('descripcion_item');

        $validator
            ->integer('cantidad')
            ->requirePresence('cantidad', 'create')
            ->notEmptyString('cantidad');

        $validator
            ->scalar('unidad_medida')
            ->allowEmptyString('unidad_medida');

        $validator
            ->decimal('precio_unitario')
            ->allowEmptyString('precio_unitario');

        $validator
            ->decimal('iva')
            ->allowEmptyString('iva');

        $validator
            ->decimal('sub_total')
            ->allowEmptyString('sub_total');

        $validator
            ->integer('id_partida')
            ->requirePresence('id_partida', 'create')
            ->notEmptyString('id_partida');

        $validator
            ->scalar('descripcion_partida')
            ->requirePresence('descripcion_partida', 'create')
            ->notEmptyString('descripcion_partida');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        return $validator;
    }
}
