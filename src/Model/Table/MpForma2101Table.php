<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MpForma2101 Model
 *
 * @method \App\Model\Entity\MpForma2101 get($primaryKey, $options = [])
 * @method \App\Model\Entity\MpForma2101 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MpForma2101[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2101|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2101 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2101 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2101[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2101 findOrCreate($search, callable $callback = null, $options = [])
 */
class MpForma2101Table extends Table
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

        $this->setTable('mp_forma2101');
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
            ->allowEmptyString('entidad_federal');

        $validator
            ->scalar('politica_presupuestaria')
            ->allowEmptyString('politica_presupuestaria');

        $validator
            ->scalar('politica_gastos')
            ->allowEmptyString('politica_gastos');

        $validator
            ->scalar('politica_cobertura')
            ->allowEmptyString('politica_cobertura');

        return $validator;
    }
}
