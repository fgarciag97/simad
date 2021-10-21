<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PresupuestoSector Model
 *
 * @method \App\Model\Entity\PresupuestoSector get($primaryKey, $options = [])
 * @method \App\Model\Entity\PresupuestoSector newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PresupuestoSector[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoSector|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoSector saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoSector patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoSector[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoSector findOrCreate($search, callable $callback = null, $options = [])
 */
class PresupuestoSectorTable extends Table
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

        $this->setTable('presupuesto_sector');
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
            ->scalar('sector')
            ->requirePresence('sector', 'create')
            ->notEmptyString('sector')
            ->add('sector', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('denominacion')
            ->allowEmptyString('denominacion');

        $validator
            ->scalar('tipo_categoria')
            ->allowEmptyString('tipo_categoria');

        $validator
            ->boolean('resolucion')
            ->notEmptyString('resolucion');

        $validator
            ->integer('n_resolucion')
            ->notEmptyString('n_resolucion');

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
        $rules->add($rules->isUnique(['sector']));

        return $rules;
    }
}
