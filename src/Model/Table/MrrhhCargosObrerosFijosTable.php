<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhCargosObrerosFijos Model
 *
 * @method \App\Model\Entity\MrrhhCargosObrerosFijo get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosFijo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosFijo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosFijo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosFijo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosFijo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosFijo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosFijo findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhCargosObrerosFijosTable extends Table
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

        $this->setTable('mrrhh_cargos_obreros_fijos');
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
