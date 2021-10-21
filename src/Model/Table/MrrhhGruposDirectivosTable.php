<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhGruposDirectivos Model
 *
 * @method \App\Model\Entity\MrrhhGruposDirectivo get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhGruposDirectivo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhGruposDirectivo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhGruposDirectivo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhGruposDirectivo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhGruposDirectivo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhGruposDirectivo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhGruposDirectivo findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhGruposDirectivosTable extends Table
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

        $this->setTable('mrrhh_grupos_directivos');
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
            ->scalar('siglas')
            ->requirePresence('siglas', 'create')
            ->notEmptyString('siglas');

        $validator
            ->scalar('denominacion')
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        return $validator;
    }
}
