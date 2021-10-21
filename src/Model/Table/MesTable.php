<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mes Model
 *
 * @method \App\Model\Entity\Me get($primaryKey, $options = [])
 * @method \App\Model\Entity\Me newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Me[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Me|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Me saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Me patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Me[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Me findOrCreate($search, callable $callback = null, $options = [])
 */
class MesTable extends Table
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

        $this->setTable('mes');
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
            ->scalar('denominacion')
            ->maxLength('denominacion', 20)
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        return $validator;
    }
}
