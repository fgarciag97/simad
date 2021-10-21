<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PresupuestoSubPrograma Model
 *
 * @method \App\Model\Entity\PresupuestoSubPrograma get($primaryKey, $options = [])
 * @method \App\Model\Entity\PresupuestoSubPrograma newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PresupuestoSubPrograma[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoSubPrograma|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoSubPrograma saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoSubPrograma patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoSubPrograma[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoSubPrograma findOrCreate($search, callable $callback = null, $options = [])
 */
class PresupuestoSubProgramaTable extends Table
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

        $this->setTable('presupuesto_sub_programa');
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
            ->integer('id_programa')
            ->requirePresence('id_programa', 'create')
            ->notEmptyString('id_programa');

        $validator
            ->scalar('sub_programa')
            ->allowEmptyString('sub_programa');

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
