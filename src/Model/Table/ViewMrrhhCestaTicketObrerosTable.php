<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewMrrhhCestaTicketObreros Model
 *
 * @method \App\Model\Entity\ViewMrrhhCestaTicketObrero get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewMrrhhCestaTicketObrero newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhCestaTicketObrero[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhCestaTicketObrero|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewMrrhhCestaTicketObrero saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewMrrhhCestaTicketObrero patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhCestaTicketObrero[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewMrrhhCestaTicketObrero findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewMrrhhCestaTicketObrerosTable extends Table
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

        $this->setTable('view_mrrhh_cesta_ticket_obreros');
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
            ->integer('requisicion')
            ->allowEmptyString('requisicion');

        $validator
            ->integer('ano')
            ->allowEmptyString('ano');

        $validator
            ->integer('mes')
            ->allowEmptyString('mes');

        $validator
            ->integer('id_tipo_personal')
            ->allowEmptyString('id_tipo_personal');

        $validator
            ->integer('cedula')
            ->allowEmptyString('cedula');

        $validator
            ->scalar('nombres')
            ->maxLength('nombres', 255)
            ->allowEmptyString('nombres');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 255)
            ->allowEmptyString('apellidos');

        $validator
            ->boolean('status')
            ->allowEmptyString('status');

        $validator
            ->scalar('dependencia')
            ->allowEmptyString('dependencia');

        $validator
            ->integer('dias_trabajados')
            ->allowEmptyString('dias_trabajados');

        $validator
            ->integer('dias_faltados')
            ->allowEmptyString('dias_faltados');

        $validator
            ->integer('dias_a_cancelar')
            ->allowEmptyString('dias_a_cancelar');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        $validator
            ->boolean('procesado')
            ->allowEmptyString('procesado');

        return $validator;
    }
}
