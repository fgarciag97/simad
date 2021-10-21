<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RegistrosHacienda Model
 *
 * @method \App\Model\Entity\RegistrosHacienda get($primaryKey, $options = [])
 * @method \App\Model\Entity\RegistrosHacienda newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RegistrosHacienda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RegistrosHacienda|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegistrosHacienda saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegistrosHacienda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RegistrosHacienda[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RegistrosHacienda findOrCreate($search, callable $callback = null, $options = [])
 */
class RegistrosHaciendaTable extends Table
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

        $this->setTable('registros_hacienda');
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
            ->scalar('numero_cuenta')
            ->requirePresence('numero_cuenta', 'create')
            ->notEmptyString('numero_cuenta');

        $validator
            ->integer('recibo')
            ->requirePresence('recibo', 'create')
            ->notEmptyString('recibo');

        $validator
            ->scalar('referencia')
            ->requirePresence('referencia', 'create')
            ->notEmptyString('referencia');

        $validator
            ->decimal('monto_debe')
            ->requirePresence('monto_debe', 'create')
            ->notEmptyString('monto_debe');

        $validator
            ->decimal('monto_haber')
            ->requirePresence('monto_haber', 'create')
            ->notEmptyString('monto_haber');

        $validator
            ->decimal('saldo')
            ->requirePresence('saldo', 'create')
            ->notEmptyString('saldo');

        $validator
            ->scalar('tipo')
            ->allowEmptyString('tipo');

        $validator
            ->scalar('descripcion')
            ->allowEmptyString('descripcion');

        $validator
            ->date('fecha_documento')
            ->allowEmptyDate('fecha_documento');

        $validator
            ->date('fecha_pago')
            ->requirePresence('fecha_pago', 'create')
            ->notEmptyDate('fecha_pago');

        $validator
            ->boolean('revision')
            ->allowEmptyString('revision');

        return $validator;
    }
}
