<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PresupuestoProyectos Model
 *
 * @method \App\Model\Entity\PresupuestoProyecto get($primaryKey, $options = [])
 * @method \App\Model\Entity\PresupuestoProyecto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PresupuestoProyecto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoProyecto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoProyecto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoProyecto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoProyecto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoProyecto findOrCreate($search, callable $callback = null, $options = [])
 */
class PresupuestoProyectosTable extends Table
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

        $this->setTable('presupuesto_proyectos');
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
            ->integer('id_proyecto')
            ->allowEmptyString('id_proyecto');

        $validator
            ->integer('id_partida')
            ->requirePresence('id_partida', 'create')
            ->notEmptyString('id_partida');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        return $validator;
    }
}
