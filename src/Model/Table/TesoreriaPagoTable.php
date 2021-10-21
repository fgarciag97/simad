<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TesoreriaPago Model
 *
 * @method \App\Model\Entity\TesoreriaPago get($primaryKey, $options = [])
 * @method \App\Model\Entity\TesoreriaPago newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TesoreriaPago[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TesoreriaPago|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TesoreriaPago saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TesoreriaPago patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TesoreriaPago[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TesoreriaPago findOrCreate($search, callable $callback = null, $options = [])
 */
class TesoreriaPagoTable extends Table
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

        $this->setTable('tesoreria_pago');
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
            ->integer('requisicion')
            ->requirePresence('requisicion', 'create')
            ->notEmptyString('requisicion');

        $validator
            ->integer('id_operacion')
            ->requirePresence('id_operacion', 'create')
            ->notEmptyString('id_operacion');

        $validator
            ->scalar('n_referencia')
            ->allowEmptyString('n_referencia');

        $validator
            ->scalar('n_cheque')
            ->allowEmptyString('n_cheque');

        $validator
            ->scalar('n_control_cheque')
            ->allowEmptyString('n_control_cheque');

        $validator
            ->scalar('pago')
            ->allowEmptyString('pago');

        $validator
            ->scalar('numero_cuenta')
            ->requirePresence('numero_cuenta', 'create')
            ->notEmptyString('numero_cuenta');

        $validator
            ->scalar('descripcion')
            ->allowEmptyString('descripcion');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        return $validator;
    }
}
