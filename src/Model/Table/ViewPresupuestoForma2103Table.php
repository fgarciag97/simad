<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewPresupuestoForma2103 Model
 *
 * @method \App\Model\Entity\ViewPresupuestoForma2103 get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2103 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2103[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2103|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2103 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2103 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2103[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2103 findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewPresupuestoForma2103Table extends Table
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

        $this->setTable('view_presupuesto_forma2103');
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
            ->scalar('unidad_ejecutora')
            ->allowEmptyString('unidad_ejecutora');

        $validator
            ->scalar('funcionario_responsable')
            ->allowEmptyString('funcionario_responsable');

        $validator
            ->scalar('concatenado')
            ->allowEmptyString('concatenado');

        return $validator;
    }
}
