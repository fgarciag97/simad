<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConciliacionHacienda Model
 *
 * @method \App\Model\Entity\ConciliacionHacienda get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConciliacionHacienda newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ConciliacionHacienda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConciliacionHacienda|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConciliacionHacienda saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConciliacionHacienda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConciliacionHacienda[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConciliacionHacienda findOrCreate($search, callable $callback = null, $options = [])
 */
class ConciliacionHaciendaTable extends Table
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

        $this->setTable('conciliacion_hacienda');
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
            ->integer('id_banco')
            ->requirePresence('id_banco', 'create')
            ->notEmptyString('id_banco');

        $validator
            ->scalar('numero_cuenta')
            ->requirePresence('numero_cuenta', 'create')
            ->notEmptyString('numero_cuenta');

        $validator
            ->date('fecha_inicio')
            ->requirePresence('fecha_inicio', 'create')
            ->notEmptyDate('fecha_inicio');

        $validator
            ->date('fecha_corte')
            ->requirePresence('fecha_corte', 'create')
            ->notEmptyDate('fecha_corte');

        $validator
            ->scalar('descripcion')
            ->allowEmptyString('descripcion');

        $validator
            ->decimal('saldo_libro')
            ->requirePresence('saldo_libro', 'create')
            ->notEmptyString('saldo_libro');

        $validator
            ->decimal('saldo_estado_cuenta')
            ->requirePresence('saldo_estado_cuenta', 'create')
            ->notEmptyString('saldo_estado_cuenta');

        return $validator;
    }
}
