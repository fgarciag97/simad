<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MpForma2120 Model
 *
 * @method \App\Model\Entity\MpForma2120 get($primaryKey, $options = [])
 * @method \App\Model\Entity\MpForma2120 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MpForma2120[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2120|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2120 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2120 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2120[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2120 findOrCreate($search, callable $callback = null, $options = [])
 */
class MpForma2120Table extends Table
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

        $this->setTable('mp_forma2120');
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
            ->scalar('partida')
            ->maxLength('partida', 15)
            ->requirePresence('partida', 'create')
            ->notEmptyString('partida');

        $validator
            ->scalar('denominacion')
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        $validator
            ->scalar('sector1')
            ->maxLength('sector1', 5)
            ->requirePresence('sector1', 'create')
            ->notEmptyString('sector1');

        $validator
            ->decimal('monto1')
            ->requirePresence('monto1', 'create')
            ->notEmptyString('monto1');

        $validator
            ->scalar('sector2')
            ->maxLength('sector2', 5)
            ->allowEmptyString('sector2');

        $validator
            ->decimal('monto2')
            ->allowEmptyString('monto2');

        $validator
            ->scalar('sector3')
            ->maxLength('sector3', 5)
            ->allowEmptyString('sector3');

        $validator
            ->decimal('monto3')
            ->allowEmptyString('monto3');

        $validator
            ->scalar('sector4')
            ->maxLength('sector4', 5)
            ->allowEmptyString('sector4');

        $validator
            ->decimal('monto4')
            ->allowEmptyString('monto4');

        $validator
            ->scalar('sector5')
            ->maxLength('sector5', 5)
            ->allowEmptyString('sector5');

        $validator
            ->decimal('monto5')
            ->allowEmptyString('monto5');

        $validator
            ->scalar('sector6')
            ->maxLength('sector6', 5)
            ->allowEmptyString('sector6');

        $validator
            ->decimal('monto6')
            ->allowEmptyString('monto6');

        $validator
            ->scalar('sector7')
            ->maxLength('sector7', 5)
            ->allowEmptyString('sector7');

        $validator
            ->decimal('monto7')
            ->allowEmptyString('monto7');

        $validator
            ->scalar('sector8')
            ->maxLength('sector8', 5)
            ->allowEmptyString('sector8');

        $validator
            ->decimal('monto8')
            ->allowEmptyString('monto8');

        $validator
            ->scalar('sector9')
            ->maxLength('sector9', 5)
            ->allowEmptyString('sector9');

        $validator
            ->decimal('monto9')
            ->allowEmptyString('monto9');

        $validator
            ->scalar('sector10')
            ->maxLength('sector10', 5)
            ->allowEmptyString('sector10');

        $validator
            ->decimal('monto10')
            ->allowEmptyString('monto10');

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
