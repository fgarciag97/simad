<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MpForma2110 Model
 *
 * @method \App\Model\Entity\MpForma2110 get($primaryKey, $options = [])
 * @method \App\Model\Entity\MpForma2110 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MpForma2110[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2110|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2110 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2110 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2110[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2110 findOrCreate($search, callable $callback = null, $options = [])
 */
class MpForma2110Table extends Table
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

        $this->setTable('mp_forma2110');
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
            ->maxLength('sector', 5)
            ->requirePresence('sector', 'create')
            ->notEmptyString('sector');

        $validator
            ->scalar('partida')
            ->maxLength('partida', 15)
            ->requirePresence('partida', 'create')
            ->notEmptyString('partida');

        $validator
            ->scalar('denominacion')
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        $validator
            ->decimal('corriente')
            ->allowEmptyString('corriente');

        $validator
            ->decimal('capital')
            ->allowEmptyString('capital');

        $validator
            ->decimal('total')
            ->allowEmptyString('total');

        $validator
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        return $validator;
    }
}
