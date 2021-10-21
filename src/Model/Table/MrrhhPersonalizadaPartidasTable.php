<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhPersonalizadaPartidas Model
 *
 * @method \App\Model\Entity\MrrhhPersonalizadaPartida get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhPersonalizadaPartida newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhPersonalizadaPartida[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhPersonalizadaPartida|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhPersonalizadaPartida saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhPersonalizadaPartida patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhPersonalizadaPartida[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhPersonalizadaPartida findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhPersonalizadaPartidasTable extends Table
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

        $this->setTable('mrrhh_personalizada_partidas');
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
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        $validator
            ->integer('mes')
            ->requirePresence('mes', 'create')
            ->notEmptyString('mes');

        $validator
            ->integer('quincena')
            ->requirePresence('quincena', 'create')
            ->notEmptyString('quincena');

        $validator
            ->integer('id_tipo_personal')
            ->requirePresence('id_tipo_personal', 'create')
            ->notEmptyString('id_tipo_personal');

        $validator
            ->scalar('partida')
            ->requirePresence('partida', 'create')
            ->notEmptyString('partida');

        $validator
            ->scalar('denominacion')
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        $validator
            ->decimal('monto')
            ->requirePresence('monto', 'create')
            ->notEmptyString('monto');

        return $validator;
    }
}
