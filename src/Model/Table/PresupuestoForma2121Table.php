<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PresupuestoForma2121 Model
 *
 * @method \App\Model\Entity\PresupuestoForma2121 get($primaryKey, $options = [])
 * @method \App\Model\Entity\PresupuestoForma2121 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PresupuestoForma2121[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoForma2121|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoForma2121 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoForma2121 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoForma2121[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoForma2121 findOrCreate($search, callable $callback = null, $options = [])
 */
class PresupuestoForma2121Table extends Table
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

        $this->setTable('presupuesto_forma2121');
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
            ->integer('id_proyecto')
            ->allowEmptyString('id_proyecto');

        $validator
            ->integer('id_actividad')
            ->allowEmptyString('id_actividad');

        $validator
            ->boolean('resolucion')
            ->notEmptyString('resolucion');

        $validator
            ->integer('n_resolucion')
            ->notEmptyString('n_resolucion');

        return $validator;
    }
}
