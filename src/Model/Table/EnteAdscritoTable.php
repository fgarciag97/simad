<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EnteAdscrito Model
 *
 * @method \App\Model\Entity\EnteAdscrito get($primaryKey, $options = [])
 * @method \App\Model\Entity\EnteAdscrito newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EnteAdscrito[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EnteAdscrito|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EnteAdscrito saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EnteAdscrito patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EnteAdscrito[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EnteAdscrito findOrCreate($search, callable $callback = null, $options = [])
 */
class EnteAdscritoTable extends Table
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

        $this->setTable('ente_adscrito');
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
            ->allowEmptyString('denominacion');

        return $validator;
    }
}
