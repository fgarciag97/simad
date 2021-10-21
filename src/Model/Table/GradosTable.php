<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Grados Model
 *
 * @method \App\Model\Entity\Grado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Grado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Grado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Grado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Grado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Grado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Grado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Grado findOrCreate($search, callable $callback = null, $options = [])
 */
class GradosTable extends Table
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

        $this->setTable('grados');
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

        $validator
            ->decimal('porcentaje')
            ->requirePresence('porcentaje', 'create')
            ->notEmptyString('porcentaje');

        return $validator;
    }
}
