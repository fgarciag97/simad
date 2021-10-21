<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UnidadEjecutora Model
 *
 * @method \App\Model\Entity\UnidadEjecutora get($primaryKey, $options = [])
 * @method \App\Model\Entity\UnidadEjecutora newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UnidadEjecutora[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UnidadEjecutora|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UnidadEjecutora saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UnidadEjecutora patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UnidadEjecutora[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UnidadEjecutora findOrCreate($search, callable $callback = null, $options = [])
 */
class UnidadEjecutoraTable extends Table
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

        $this->setTable('unidad_ejecutora');
        $this->setDisplayField('unidad');
        $this->setPrimaryKey('unidad');
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
            ->integer('unidad')
            ->allowEmptyString('unidad', null, 'create');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 50)
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        return $validator;
    }
}
