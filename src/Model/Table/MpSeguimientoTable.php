<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MpSeguimiento Model
 *
 * @method \App\Model\Entity\MpSeguimiento get($primaryKey, $options = [])
 * @method \App\Model\Entity\MpSeguimiento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MpSeguimiento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MpSeguimiento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpSeguimiento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpSeguimiento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MpSeguimiento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MpSeguimiento findOrCreate($search, callable $callback = null, $options = [])
 */
class MpSeguimientoTable extends Table
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

        $this->setTable('mp_seguimiento');
        $this->setDisplayField('ano');
        $this->setPrimaryKey('ano');
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
            ->integer('ano')
            ->allowEmptyString('ano', null, 'create');

        $validator
            ->boolean('datosentidad')
            ->allowEmptyString('datosentidad');

        $validator
            ->boolean('politica_presupuestaria')
            ->allowEmptyString('politica_presupuestaria');

        $validator
            ->boolean('ingresos')
            ->allowEmptyString('ingresos');

        $validator
            ->boolean('categorias')
            ->allowEmptyString('categorias');

        $validator
            ->boolean('proyectos')
            ->allowEmptyString('proyectos');

        return $validator;
    }
}
