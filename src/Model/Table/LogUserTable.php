<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LogUser Model
 *
 * @method \App\Model\Entity\LogUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\LogUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LogUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LogUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LogUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LogUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LogUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LogUser findOrCreate($search, callable $callback = null, $options = [])
 */
class LogUserTable extends Table
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

        $this->setTable('log_user');
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
            ->integer('id_usuario')
            ->requirePresence('id_usuario', 'create')
            ->notEmptyString('id_usuario');

        $validator
            ->date('fecha_inicio')
            ->allowEmptyDate('fecha_inicio');

        $validator
            ->time('hora_inicio')
            ->allowEmptyTime('hora_inicio');

        $validator
            ->date('fecha_cierre')
            ->allowEmptyDate('fecha_cierre');

        $validator
            ->time('hora_cierre')
            ->allowEmptyTime('hora_cierre');

        $validator
            ->scalar('ip_sesion')
            ->maxLength('ip_sesion', 39)
            ->allowEmptyString('ip_sesion');

        $validator
            ->boolean('status')
            ->allowEmptyString('status');

        $validator
            ->date('ultima_fecha')
            ->allowEmptyDate('ultima_fecha');

        $validator
            ->time('ultima_hora')
            ->allowEmptyTime('ultima_hora');

        return $validator;
    }
}
