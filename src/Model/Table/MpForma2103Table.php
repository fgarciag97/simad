<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MpForma2103 Model
 *
 * @method \App\Model\Entity\MpForma2103 get($primaryKey, $options = [])
 * @method \App\Model\Entity\MpForma2103 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MpForma2103[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2103|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2103 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2103 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2103[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2103 findOrCreate($search, callable $callback = null, $options = [])
 */
class MpForma2103Table extends Table
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

        $this->setTable('mp_forma2103');
        $this->setDisplayField('forma');
        $this->setPrimaryKey('forma');
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
            ->integer('forma')
            ->allowEmptyString('forma', null, 'create');

        $validator
            ->scalar('sector')
            ->maxLength('sector', 15)
            ->requirePresence('sector', 'create')
            ->notEmptyString('sector');

        $validator
            ->scalar('denominacion')
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        $validator
            ->scalar('unidad_ejecutora')
            ->allowEmptyString('unidad_ejecutora');

        $validator
            ->scalar('funcionario_responsable')
            ->maxLength('funcionario_responsable', 50)
            ->allowEmptyString('funcionario_responsable');

        $validator
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        return $validator;
    }
}
