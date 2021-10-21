<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GradoNivelProteccionCivil Model
 *
 * @method \App\Model\Entity\GradoNivelProteccionCivil get($primaryKey, $options = [])
 * @method \App\Model\Entity\GradoNivelProteccionCivil newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GradoNivelProteccionCivil[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GradoNivelProteccionCivil|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GradoNivelProteccionCivil saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GradoNivelProteccionCivil patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GradoNivelProteccionCivil[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GradoNivelProteccionCivil findOrCreate($search, callable $callback = null, $options = [])
 */
class GradoNivelProteccionCivilTable extends Table
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

        $this->setTable('grado_nivel_proteccion_civil');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('denominacion')
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        return $validator;
    }
}
