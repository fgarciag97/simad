<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PresupuestoForma2104 Model
 *
 * @method \App\Model\Entity\PresupuestoForma2104 get($primaryKey, $options = [])
 * @method \App\Model\Entity\PresupuestoForma2104 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PresupuestoForma2104[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoForma2104|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoForma2104 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PresupuestoForma2104 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoForma2104[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PresupuestoForma2104 findOrCreate($search, callable $callback = null, $options = [])
 */
class PresupuestoForma2104Table extends Table
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

        $this->setTable('presupuesto_forma2104');
        $this->setDisplayField('forma');
        $this->setPrimaryKey('forma');
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
            ->allowEmptyString('forma', null, 'create');

        $validator
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        $validator
            ->scalar('entidad_federal')
            ->requirePresence('entidad_federal', 'create')
            ->notEmptyString('entidad_federal');

        $validator
            ->integer('id_sector')
            ->requirePresence('id_sector', 'create')
            ->notEmptyString('id_sector');

        $validator
            ->integer('id_programa')
            ->requirePresence('id_programa', 'create')
            ->notEmptyString('id_programa');

        $validator
            ->decimal('ingreso_propio')
            ->requirePresence('ingreso_propio', 'create')
            ->notEmptyString('ingreso_propio');

        $validator
            ->decimal('situado')
            ->requirePresence('situado', 'create')
            ->notEmptyString('situado');

        $validator
            ->decimal('ingreso_estadal')
            ->requirePresence('ingreso_estadal', 'create')
            ->notEmptyString('ingreso_estadal');

        $validator
            ->decimal('ingreso_fci')
            ->requirePresence('ingreso_fci', 'create')
            ->notEmptyString('ingreso_fci');

        $validator
            ->decimal('otra_fuente')
            ->requirePresence('otra_fuente', 'create')
            ->notEmptyString('otra_fuente');

        $validator
            ->decimal('total')
            ->requirePresence('total', 'create')
            ->notEmptyString('total');

        return $validator;
    }
}
