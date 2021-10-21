<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Quincena Model
 *
 * @method \App\Model\Entity\Quincena get($primaryKey, $options = [])
 * @method \App\Model\Entity\Quincena newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Quincena[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Quincena|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Quincena saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Quincena patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Quincena[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Quincena findOrCreate($search, callable $callback = null, $options = [])
 */
class QuincenaTable extends Table
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

        $this->setTable('quincena');
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
            ->maxLength('denominacion', 30)
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        $validator
            ->integer('fecha_desde')
            ->requirePresence('fecha_desde', 'create')
            ->notEmptyString('fecha_desde');

        $validator
            ->integer('fecha_hasta')
            ->requirePresence('fecha_hasta', 'create')
            ->notEmptyString('fecha_hasta');

        return $validator;
    }
}
