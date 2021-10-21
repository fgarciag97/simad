<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TesoreriaCuentas Model
 *
 * @method \App\Model\Entity\TesoreriaCuenta get($primaryKey, $options = [])
 * @method \App\Model\Entity\TesoreriaCuenta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TesoreriaCuenta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TesoreriaCuenta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TesoreriaCuenta saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TesoreriaCuenta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TesoreriaCuenta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TesoreriaCuenta findOrCreate($search, callable $callback = null, $options = [])
 */
class TesoreriaCuentasTable extends Table
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

        $this->setTable('tesoreria_cuentas');
        $this->setDisplayField('numero_cuenta');
        $this->setPrimaryKey('numero_cuenta');
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
            ->integer('id_banco')
            ->allowEmptyString('id_banco', null, 'create');

        $validator
            ->scalar('numero_cuenta')
            ->requirePresence('numero_cuenta', 'create')
            ->notEmptyString('numero_cuenta');

        $validator
            ->scalar('nombre_banco')
            ->requirePresence('nombre_banco', 'create')
            ->notEmptyString('nombre_banco');

        $validator
            ->scalar('representante')
            ->requirePresence('representante', 'create')
            ->notEmptyString('representante');

        $validator
            ->date('fecha_apertura')
            ->allowEmptyDate('fecha_apertura');

        $validator
            ->decimal('saldo')
            ->allowEmptyString('saldo');

        $validator
            ->boolean('tipo')
            ->allowEmptyString('tipo');

        $validator
            ->integer('cedula')
            ->requirePresence('cedula', 'create')
            ->notEmptyString('cedula');

        return $validator;
    }
}
