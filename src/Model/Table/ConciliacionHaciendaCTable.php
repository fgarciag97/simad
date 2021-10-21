<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConciliacionHaciendaC Model
 *
 * @method \App\Model\Entity\ConciliacionHaciendaC get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConciliacionHaciendaC newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ConciliacionHaciendaC[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConciliacionHaciendaC|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConciliacionHaciendaC saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConciliacionHaciendaC patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConciliacionHaciendaC[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConciliacionHaciendaC findOrCreate($search, callable $callback = null, $options = [])
 */
class ConciliacionHaciendaCTable extends Table
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

        $this->setTable('conciliacion_hacienda_c');
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
            ->integer('id_conciliacion')
            ->requirePresence('id_conciliacion', 'create')
            ->notEmptyString('id_conciliacion');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->scalar('motivo')
            ->requirePresence('motivo', 'create')
            ->notEmptyString('motivo');

        $validator
            ->decimal('monto')
            ->requirePresence('monto', 'create')
            ->notEmptyString('monto');

        return $validator;
    }
}
