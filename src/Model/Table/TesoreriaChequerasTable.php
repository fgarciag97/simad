<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TesoreriaChequeras Model
 *
 * @method \App\Model\Entity\TesoreriaChequera get($primaryKey, $options = [])
 * @method \App\Model\Entity\TesoreriaChequera newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TesoreriaChequera[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TesoreriaChequera|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TesoreriaChequera saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TesoreriaChequera patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TesoreriaChequera[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TesoreriaChequera findOrCreate($search, callable $callback = null, $options = [])
 */
class TesoreriaChequerasTable extends Table
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

        $this->setTable('tesoreria_chequeras');
        $this->setDisplayField('numero_chequera');
        $this->setPrimaryKey('numero_chequera');
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
            ->scalar('numero_chequera')
            ->allowEmptyString('numero_chequera', null, 'create');

        $validator
            ->scalar('numero_cuenta')
            ->allowEmptyString('numero_cuenta');

        $validator
            ->date('fecha_chequera')
            ->requirePresence('fecha_chequera', 'create')
            ->notEmptyDate('fecha_chequera');

        $validator
            ->integer('cantidad_cheques')
            ->requirePresence('cantidad_cheques', 'create')
            ->notEmptyString('cantidad_cheques');

        $validator
            ->integer('numero_inicio')
            ->requirePresence('numero_inicio', 'create')
            ->notEmptyString('numero_inicio');

        return $validator;
    }
}
