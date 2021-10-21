<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConciliacionHaciendaD Model
 *
 * @method \App\Model\Entity\ConciliacionHaciendaD get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConciliacionHaciendaD newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ConciliacionHaciendaD[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConciliacionHaciendaD|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConciliacionHaciendaD saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConciliacionHaciendaD patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConciliacionHaciendaD[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConciliacionHaciendaD findOrCreate($search, callable $callback = null, $options = [])
 */
class ConciliacionHaciendaDTable extends Table
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

        $this->setTable('conciliacion_hacienda_d');
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
            ->integer('numero')
            ->requirePresence('numero', 'create')
            ->notEmptyString('numero');

        $validator
            ->scalar('concepto')
            ->requirePresence('concepto', 'create')
            ->notEmptyString('concepto');

        $validator
            ->decimal('monto')
            ->requirePresence('monto', 'create')
            ->notEmptyString('monto');

        return $validator;
    }
}
