<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MpForma2112 Model
 *
 * @method \App\Model\Entity\MpForma2112 get($primaryKey, $options = [])
 * @method \App\Model\Entity\MpForma2112 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MpForma2112[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2112|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2112 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2112 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2112[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2112 findOrCreate($search, callable $callback = null, $options = [])
 */
class MpForma2112Table extends Table
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

        $this->setTable('mp_forma2112');
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
            ->notEmptyString('ano')
            ->add('ano', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('entidad_deferal')
            ->allowEmptyString('entidad_deferal');

        $validator
            ->scalar('descripcion')
            ->allowEmptyString('descripcion');

        $validator
            ->scalar('unidad_medida')
            ->allowEmptyString('unidad_medida');

        $validator
            ->scalar('cantidad_programada')
            ->allowEmptyString('cantidad_programada');

        $validator
            ->decimal('costo_financiero')
            ->allowEmptyString('costo_financiero');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['ano']));

        return $rules;
    }
}
