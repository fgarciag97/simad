<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HaciendaPagos Model
 *
 * @method \App\Model\Entity\HaciendaPago get($primaryKey, $options = [])
 * @method \App\Model\Entity\HaciendaPago newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HaciendaPago[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HaciendaPago|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HaciendaPago saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HaciendaPago patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HaciendaPago[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HaciendaPago findOrCreate($search, callable $callback = null, $options = [])
 */
class HaciendaPagosTable extends Table
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

        $this->setTable('hacienda_pagos');
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
            ->integer('idcuenta')
            ->requirePresence('idcuenta', 'create')
            ->notEmptyString('idcuenta');

        $validator
            ->integer('idplanunico')
            ->allowEmptyString('idplanunico');

        $validator
            ->integer('idctahaber')
            ->allowEmptyString('idctahaber');

        $validator
            ->integer('idrecibo')
            ->allowEmptyString('idrecibo');

        $validator
            ->integer('idgenera')
            ->allowEmptyString('idgenera');

        $validator
            ->integer('idconccta')
            ->allowEmptyString('idconccta');

        $validator
            ->integer('idcontrib')
            ->allowEmptyString('idcontrib');

        $validator
            ->decimal('rmoncuenta')
            ->allowEmptyString('rmoncuenta');

        $validator
            ->decimal('rmoncuenta1')
            ->allowEmptyString('rmoncuenta1');

        $validator
            ->date('ffeccuenta')
            ->allowEmptyDate('ffeccuenta');

        $validator
            ->date('fechapago')
            ->allowEmptyDate('fechapago');

        $validator
            ->integer('idpropiedad')
            ->allowEmptyString('idpropiedad');

        $validator
            ->integer('ntipopropiedad')
            ->allowEmptyString('ntipopropiedad');

        $validator
            ->integer('nsergenera')
            ->allowEmptyString('nsergenera');

        $validator
            ->integer('ntipcuenta')
            ->allowEmptyString('ntipcuenta');

        $validator
            ->integer('ldebcancelado')
            ->allowEmptyString('ldebcancelado');

        $validator
            ->scalar('cobscuenta')
            ->allowEmptyString('cobscuenta');

        $validator
            ->integer('npercuenta')
            ->allowEmptyString('npercuenta');

        $validator
            ->decimal('nanocuenta')
            ->allowEmptyString('nanocuenta');

        $validator
            ->scalar('cnomusuario')
            ->maxLength('cnomusuario', 10)
            ->allowEmptyString('cnomusuario');

        $validator
            ->scalar('cnomequipo')
            ->maxLength('cnomequipo', 10)
            ->allowEmptyString('cnomequipo');

        $validator
            ->integer('idcaja')
            ->allowEmptyString('idcaja');

        $validator
            ->integer('idasg')
            ->notEmptyString('idasg');

        $validator
            ->scalar('status')
            ->maxLength('status', 10)
            ->allowEmptyString('status');

        $validator
            ->integer('tipo_propiedad')
            ->allowEmptyString('tipo_propiedad');

        return $validator;
    }
}
