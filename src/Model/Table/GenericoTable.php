<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Generico Model
 *
 * @method \App\Model\Entity\Generico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Generico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Generico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Generico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Generico saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Generico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Generico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Generico findOrCreate($search, callable $callback = null, $options = [])
 */
class GenericoTable extends Table
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

        $this->setTable('generico');
        $this->setDisplayField('partida');
        $this->setPrimaryKey('partida');
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
            ->scalar('partida')
            ->maxLength('partida', 5)
            ->allowEmptyString('partida', null, 'create');

        $validator
            ->scalar('denominacion')
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        return $validator;
    }
}
