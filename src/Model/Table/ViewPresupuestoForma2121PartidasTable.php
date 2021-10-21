<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewPresupuestoForma2121Partidas Model
 *
 * @method \App\Model\Entity\ViewPresupuestoForma2121Partida get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Partida newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Partida[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Partida|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Partida saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Partida patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Partida[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Partida findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewPresupuestoForma2121PartidasTable extends Table
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

        $this->setTable('view_presupuesto_forma2121_partidas');
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
            ->allowEmptyString('id');

        $validator
            ->integer('ano')
            ->allowEmptyString('ano');

        $validator
            ->integer('id_sector')
            ->allowEmptyString('id_sector');

        $validator
            ->scalar('sector')
            ->allowEmptyString('sector');

        $validator
            ->scalar('denominacion_sector')
            ->allowEmptyString('denominacion_sector');

        $validator
            ->integer('id_programa')
            ->allowEmptyString('id_programa');

        $validator
            ->scalar('programa')
            ->allowEmptyString('programa');

        $validator
            ->scalar('denominacion_programa')
            ->allowEmptyString('denominacion_programa');

        $validator
            ->integer('id_sub_programa')
            ->allowEmptyString('id_sub_programa');

        $validator
            ->scalar('sub_programa')
            ->allowEmptyString('sub_programa');

        $validator
            ->scalar('denominacion_sub_programa')
            ->allowEmptyString('denominacion_sub_programa');

        $validator
            ->integer('id_proyecto')
            ->allowEmptyString('id_proyecto');

        $validator
            ->scalar('proyecto')
            ->allowEmptyString('proyecto');

        $validator
            ->scalar('denominacion_proyecto')
            ->allowEmptyString('denominacion_proyecto');

        $validator
            ->integer('id_actividad')
            ->allowEmptyString('id_actividad');

        $validator
            ->scalar('actividad')
            ->allowEmptyString('actividad');

        $validator
            ->scalar('denominacion_actividad')
            ->allowEmptyString('denominacion_actividad');

        $validator
            ->integer('id_partida')
            ->allowEmptyString('id_partida');

        $validator
            ->scalar('partida')
            ->maxLength('partida', 20)
            ->allowEmptyString('partida');

        $validator
            ->scalar('denominacion')
            ->allowEmptyString('denominacion');

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

        return $validator;
    }
}
