<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TesoreriaCheques Model
 *
 * @method \App\Model\Entity\TesoreriaCheque get($primaryKey, $options = [])
 * @method \App\Model\Entity\TesoreriaCheque newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TesoreriaCheque[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TesoreriaCheque|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TesoreriaCheque saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TesoreriaCheque patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TesoreriaCheque[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TesoreriaCheque findOrCreate($search, callable $callback = null, $options = [])
 */
class TesoreriaChequesTable extends Table
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

        $this->setTable('tesoreria_cheques');
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
            ->allowEmptyString('numero_cuenta');

        $validator
            ->scalar('numero_chequera')
            ->allowEmptyString('numero_chequera');

        $validator
            ->scalar('numero_cheque')
            ->requirePresence('numero_cheque', 'create')
            ->notEmptyString('numero_cheque');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

        return $validator;
    }
}
