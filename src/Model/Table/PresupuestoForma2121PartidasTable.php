<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PresupuestoForma2121Partidas Model
 *
 * @method \App\Model\Entity\PresupuestoForma2121Partida get($primaryKey, $options = [])
 * @method \App\Model\Entity\PresupuestoForma2121Partida newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PresupuestoForma2121Partida[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoForma2121Partida|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoForma2121Partida saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoForma2121Partida patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoForma2121Partida[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoForma2121Partida findOrCreate($search, callable $callback = null, $options = [])
 */
class PresupuestoForma2121PartidasTable extends Table
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

        $this->setTable('presupuesto_forma2121_partidas');
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
            ->decimal('ingreso_propio')
            ->allowEmptyString('ingreso_propio');

        $validator
            ->decimal('situado')
            ->allowEmptyString('situado');

        $validator
            ->decimal('ingreso_estadal')
            ->allowEmptyString('ingreso_estadal');

        $validator
            ->decimal('ingreso_fci')
            ->allowEmptyString('ingreso_fci');

        $validator
            ->decimal('otra_fuente')
            ->allowEmptyString('otra_fuente');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        $validator
            ->boolean('resolucion')
            ->notEmptyString('resolucion');

        $validator
            ->integer('n_resolucion')
            ->notEmptyString('n_resolucion');

        return $validator;
    }
}
