<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MpForma2111 Model
 *
 * @method \App\Model\Entity\MpForma2111 get($primaryKey, $options = [])
 * @method \App\Model\Entity\MpForma2111 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MpForma2111[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2111|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2111 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2111 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2111[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2111 findOrCreate($search, callable $callback = null, $options = [])
 */
class MpForma2111Table extends Table
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

        $this->setTable('mp_forma2111');
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
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano')
            ->add('ano', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('entidad_deferal')
            ->allowEmptyString('entidad_deferal');

        $validator
            ->scalar('unidad_administrativa')
            ->allowEmptyString('unidad_administrativa');

        $validator
            ->scalar('descripcion')
            ->allowEmptyString('descripcion');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['ano']));

        return $rules;
    }
}
