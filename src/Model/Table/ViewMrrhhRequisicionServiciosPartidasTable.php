<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewMrrhhRequisicionServiciosPartidas Model
 *
 * @method \App\Model\Entity\ViewMrrhhRequisicionServiciosPartida get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicionServiciosPartida newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicionServiciosPartida[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicionServiciosPartida|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicionServiciosPartida saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicionServiciosPartida patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicionServiciosPartida[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhRequisicionServiciosPartida findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewMrrhhRequisicionServiciosPartidasTable extends Table
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

        $this->setTable('view_mrrhh_requisicion_servicios_partidas');
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
            ->allowEmptyString('id');

        $validator
            ->integer('ano')
            ->allowEmptyString('ano');

        $validator
            ->integer('requisicion')
            ->allowEmptyString('requisicion');

        $validator
            ->integer('id_partida')
            ->allowEmptyString('id_partida');

        $validator
            ->scalar('denominacion_partida')
            ->allowEmptyString('denominacion_partida');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        return $validator;
    }
}
