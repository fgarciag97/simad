<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GradoNivelJubilados Model
 *
 * @method \App\Model\Entity\GradoNivelJubilado get($primaryKey, $options = [])
 * @method \App\Model\Entity\GradoNivelJubilado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GradoNivelJubilado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GradoNivelJubilado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GradoNivelJubilado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GradoNivelJubilado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GradoNivelJubilado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GradoNivelJubilado findOrCreate($search, callable $callback = null, $options = [])
 */
class GradoNivelJubiladosTable extends Table
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

        $this->setTable('grado_nivel_jubilados');
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
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        return $validator;
    }
}
