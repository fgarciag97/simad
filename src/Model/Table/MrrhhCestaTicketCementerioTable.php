<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhCestaTicketCementerio Model
 *
 * @method \App\Model\Entity\MrrhhCestaTicketCementerio get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhCestaTicketCementerio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhCestaTicketCementerio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCestaTicketCementerio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhCestaTicketCementerio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhCestaTicketCementerio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCestaTicketCementerio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCestaTicketCementerio findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhCestaTicketCementerioTable extends Table
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

        $this->setTable('mrrhh_cesta_ticket_cementerio');
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
            ->integer('requisicion')
            ->requirePresence('requisicion', 'create')
            ->notEmptyString('requisicion');

        $validator
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        $validator
            ->integer('mes')
            ->requirePresence('mes', 'create')
            ->notEmptyString('mes');

        $validator
            ->integer('id_tipo_personal')
            ->requirePresence('id_tipo_personal', 'create')
            ->notEmptyString('id_tipo_personal');

        $validator
            ->integer('cedula')
            ->requirePresence('cedula', 'create')
            ->notEmptyString('cedula');

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
