<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewPresupuestoForma2104 Model
 *
 * @method \App\Model\Entity\ViewPresupuestoForma2104 get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2104 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2104[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2104|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2104 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2104 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2104[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2104 findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewPresupuestoForma2104Table extends Table
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

        $this->setTable('view_presupuesto_forma2104');
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
            ->integer('forma')
            ->allowEmptyString('forma');

        $validator
            ->integer('ano')
            ->allowEmptyString('ano');

        $validator
            ->scalar('entidad_federal')
            ->allowEmptyString('entidad_federal');

        $validator
            ->integer('id_sector')
            ->allowEmptyString('id_sector');

        $validator
            ->scalar('sector')
            ->allowEmptyString('sector');

        $validator
            ->integer('id_programa')
            ->allowEmptyString('id_programa');

        $validator
            ->scalar('programa')
            ->allowEmptyString('programa');

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
            ->decimal('total')
            ->allowEmptyString('total');

        return $validator;
    }
}
