<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PresupuestoForma2102 Model
 *
 * @method \App\Model\Entity\PresupuestoForma2102 get($primaryKey, $options = [])
 * @method \App\Model\Entity\PresupuestoForma2102 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PresupuestoForma2102[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoForma2102|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoForma2102 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoForma2102 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoForma2102[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoForma2102 findOrCreate($search, callable $callback = null, $options = [])
 */
class PresupuestoForma2102Table extends Table
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

        $this->setTable('presupuesto_forma2102');
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
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        $validator
            ->integer('id_ramo')
            ->requirePresence('id_ramo', 'create')
            ->notEmptyString('id_ramo');

        $validator
            ->integer('id_sub_ramo')
            ->requirePresence('id_sub_ramo', 'create')
            ->notEmptyString('id_sub_ramo');

        $validator
            ->integer('id_especifico')
            ->allowEmptyString('id_especifico');

        $validator
            ->integer('id_sub_especifico')
            ->requirePresence('id_sub_especifico', 'create')
            ->notEmptyString('id_sub_especifico');

        $validator
            ->integer('ordinal')
            ->allowEmptyString('ordinal');

        $validator
            ->boolean('tipo_ingreso')
            ->allowEmptyString('tipo_ingreso');

        $validator
            ->boolean('resolucion')
            ->notEmptyString('resolucion');

        $validator
            ->integer('n_resolucion')
            ->notEmptyString('n_resolucion');

        return $validator;
    }
}
