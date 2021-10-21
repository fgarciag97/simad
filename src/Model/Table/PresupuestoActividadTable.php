<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PresupuestoActividad Model
 *
 * @method \App\Model\Entity\PresupuestoActividad get($primaryKey, $options = [])
 * @method \App\Model\Entity\PresupuestoActividad newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PresupuestoActividad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoActividad|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoActividad saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoActividad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoActividad[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoActividad findOrCreate($search, callable $callback = null, $options = [])
 */
class PresupuestoActividadTable extends Table
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

        $this->setTable('presupuesto_actividad');
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
            ->integer('id_sub_programa')
            ->requirePresence('id_sub_programa', 'create')
            ->notEmptyString('id_sub_programa');

        $validator
            ->scalar('actividad')
            ->requirePresence('actividad', 'create')
            ->notEmptyString('actividad');

        $validator
            ->scalar('denominacion')
            ->allowEmptyString('denominacion');

        $validator
            ->integer('ano')
            ->allowEmptyString('ano');

        $validator
            ->boolean('resolucion')
            ->notEmptyString('resolucion');

        $validator
            ->integer('n_resolucion')
            ->notEmptyString('n_resolucion');

        return $validator;
    }
}
