<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PresupuestoPrograma Model
 *
 * @method \App\Model\Entity\PresupuestoPrograma get($primaryKey, $options = [])
 * @method \App\Model\Entity\PresupuestoPrograma newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PresupuestoPrograma[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoPrograma|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoPrograma saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoPrograma patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoPrograma[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoPrograma findOrCreate($search, callable $callback = null, $options = [])
 */
class PresupuestoProgramaTable extends Table
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

        $this->setTable('presupuesto_programa');
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
            ->integer('id_sector')
            ->requirePresence('id_sector', 'create')
            ->notEmptyString('id_sector');

        $validator
            ->scalar('programa')
            ->requirePresence('programa', 'create')
            ->notEmptyString('programa');

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
}
