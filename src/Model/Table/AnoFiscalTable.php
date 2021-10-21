<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AnoFiscal Model
 *
 * @method \App\Model\Entity\AnoFiscal get($primaryKey, $options = [])
 * @method \App\Model\Entity\AnoFiscal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AnoFiscal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AnoFiscal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AnoFiscal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AnoFiscal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AnoFiscal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AnoFiscal findOrCreate($search, callable $callback = null, $options = [])
 */
class AnoFiscalTable extends Table
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

        $this->setTable('ano_fiscal');
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
            ->integer('ano_fiscal')
            ->requirePresence('ano_fiscal', 'create')
            ->notEmptyString('ano_fiscal');

        return $validator;
    }
}
