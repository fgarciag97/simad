<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MpForma2109 Model
 *
 * @method \App\Model\Entity\MpForma2109 get($primaryKey, $options = [])
 * @method \App\Model\Entity\MpForma2109 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MpForma2109[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2109|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2109 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2109 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2109[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2109 findOrCreate($search, callable $callback = null, $options = [])
 */
class MpForma2109Table extends Table
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

        $this->setTable('mp_forma2109');
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
            ->scalar('programa')
            ->maxLength('programa', 15)
            ->requirePresence('programa', 'create')
            ->notEmptyString('programa');

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
            ->decimal('asignacion')
            ->allowEmptyString('asignacion');

        $validator
            ->scalar('observacion')
            ->allowEmptyString('observacion');

        $validator
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        return $validator;
    }
}
