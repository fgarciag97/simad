<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MpForma2105 Model
 *
 * @method \App\Model\Entity\MpForma2105 get($primaryKey, $options = [])
 * @method \App\Model\Entity\MpForma2105 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MpForma2105[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2105|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2105 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2105 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2105[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2105 findOrCreate($search, callable $callback = null, $options = [])
 */
class MpForma2105Table extends Table
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

        $this->setTable('mp_forma2105');
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
            ->scalar('partida')
            ->maxLength('partida', 15)
            ->requirePresence('partida', 'create')
            ->notEmptyString('partida');

        $validator
            ->scalar('denominacion')
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

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

        $validator
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        return $validator;
    }
}
