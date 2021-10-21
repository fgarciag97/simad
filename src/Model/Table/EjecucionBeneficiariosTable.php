<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EjecucionBeneficiarios Model
 *
 * @method \App\Model\Entity\EjecucionBeneficiario get($primaryKey, $options = [])
 * @method \App\Model\Entity\EjecucionBeneficiario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EjecucionBeneficiario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EjecucionBeneficiario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EjecucionBeneficiario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EjecucionBeneficiario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EjecucionBeneficiario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EjecucionBeneficiario findOrCreate($search, callable $callback = null, $options = [])
 */
class EjecucionBeneficiariosTable extends Table
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

        $this->setTable('ejecucion_beneficiarios');
        $this->setDisplayField('cedula');
        $this->setPrimaryKey('cedula');
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
            ->integer('cedula')
            ->allowEmptyString('cedula', null, 'create');

        $validator
            ->scalar('letra')
            ->requirePresence('letra', 'create')
            ->notEmptyString('letra');

        $validator
            ->scalar('nombres')
            ->allowEmptyString('nombres');

        $validator
            ->scalar('direccion')
            ->allowEmptyString('direccion');

        $validator
            ->scalar('telefono')
            ->allowEmptyString('telefono');

        $validator
            ->scalar('actividad')
            ->allowEmptyString('actividad');

        $validator
            ->boolean('estado')
            ->allowEmptyString('estado');

        return $validator;
    }
}
