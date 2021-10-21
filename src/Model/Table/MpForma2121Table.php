<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MpForma2121 Model
 *
 * @method \App\Model\Entity\MpForma2121 get($primaryKey, $options = [])
 * @method \App\Model\Entity\MpForma2121 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MpForma2121[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2121|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2121 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2121 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2121[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2121 findOrCreate($search, callable $callback = null, $options = [])
 */
class MpForma2121Table extends Table
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

        $this->setTable('mp_forma2121');
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
            ->scalar('denominacion_sector')
            ->requirePresence('denominacion_sector', 'create')
            ->notEmptyString('denominacion_sector');

        $validator
            ->scalar('programa')
            ->maxLength('programa', 5)
            ->requirePresence('programa', 'create')
            ->notEmptyString('programa');

        $validator
            ->scalar('denominacion_programa')
            ->requirePresence('denominacion_programa', 'create')
            ->notEmptyString('denominacion_programa');

        $validator
            ->scalar('proyecto')
            ->maxLength('proyecto', 5)
            ->requirePresence('proyecto', 'create')
            ->notEmptyString('proyecto');

        $validator
            ->scalar('denominacion_proyecto')
            ->requirePresence('denominacion_proyecto', 'create')
            ->notEmptyString('denominacion_proyecto');

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
            ->decimal('total')
            ->requirePresence('total', 'create')
            ->notEmptyString('total');

        $validator
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        return $validator;
    }
}
