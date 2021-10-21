<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewPresupuestoForma2103Fusion Model
 *
 * @method \App\Model\Entity\ViewPresupuestoForma2103Fusion get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2103Fusion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2103Fusion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2103Fusion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2103Fusion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2103Fusion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2103Fusion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2103Fusion findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewPresupuestoForma2103FusionTable extends Table
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

        $this->setTable('view_presupuesto_forma2103_fusion');
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
            ->scalar('actividad')
            ->allowEmptyString('actividad');

        $validator
            ->scalar('denominacion')
            ->allowEmptyString('denominacion');

        $validator
            ->integer('id_sector')
            ->allowEmptyString('id_sector');

        $validator
            ->scalar('sector')
            ->allowEmptyString('sector');

        $validator
            ->scalar('sector_denominacion')
            ->allowEmptyString('sector_denominacion');

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
            ->scalar('concatenado')
            ->allowEmptyString('concatenado');

        $validator
            ->integer('ano')
            ->allowEmptyString('ano');

        $validator
            ->scalar('unidad_ejecutora')
            ->allowEmptyString('unidad_ejecutora');

        $validator
            ->scalar('funcionario_responsable')
            ->allowEmptyString('funcionario_responsable');

        return $validator;
    }
}
