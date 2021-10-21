<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PrimaHijos Model
 *
 * @method \App\Model\Entity\PrimaHijo get($primaryKey, $options = [])
 * @method \App\Model\Entity\PrimaHijo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PrimaHijo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PrimaHijo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PrimaHijo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PrimaHijo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PrimaHijo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PrimaHijo findOrCreate($search, callable $callback = null, $options = [])
 */
class PrimaHijosTable extends Table
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

        $this->setTable('prima_hijos');
        $this->setDisplayField('cantidad');
        $this->setPrimaryKey('cantidad');
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
            ->integer('cantidad')
            ->allowEmptyString('cantidad', null, 'create');

        $validator
            ->scalar('monto')
            ->requirePresence('monto', 'create')
            ->notEmptyString('monto');

        return $validator;
    }
}
