<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CompraOrdenComprasPartidas Model
 *
 * @method \App\Model\Entity\CompraOrdenComprasPartida get($primaryKey, $options = [])
 * @method \App\Model\Entity\CompraOrdenComprasPartida newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CompraOrdenComprasPartida[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CompraOrdenComprasPartida|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompraOrdenComprasPartida saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompraOrdenComprasPartida patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CompraOrdenComprasPartida[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CompraOrdenComprasPartida findOrCreate($search, callable $callback = null, $options = [])
 */
class CompraOrdenComprasPartidasTable extends Table
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

        $this->setTable('compra_orden_compras_partidas');
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
            ->integer('id_partida')
            ->requirePresence('id_partida', 'create')
            ->notEmptyString('id_partida');

        $validator
            ->scalar('descripcion')
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        return $validator;
    }
}
