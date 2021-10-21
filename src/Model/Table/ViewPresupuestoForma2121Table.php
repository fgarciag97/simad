<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewPresupuestoForma2121 Model
 *
 * @method \App\Model\Entity\ViewPresupuestoForma2121 get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121 findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewPresupuestoForma2121Table extends Table
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

        $this->setTable('view_presupuesto_forma2121');
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
            ->integer('id_actividad')
            ->allowEmptyString('id_actividad');

        $validator
            ->scalar('actividad')
            ->allowEmptyString('actividad');

        $validator
            ->decimal('monto_total_proyecto')
            ->allowEmptyString('monto_total_proyecto');

        $validator
            ->decimal('monto_total_actividad')
            ->allowEmptyString('monto_total_actividad');

        return $validator;
    }
}
