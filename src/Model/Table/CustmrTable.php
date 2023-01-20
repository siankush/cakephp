<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Custmr Model
 *
 * @property \App\Model\Table\ProfileTable&\Cake\ORM\Association\HasMany $Profile
 *
 * @method \App\Model\Entity\Custmr newEmptyEntity()
 * @method \App\Model\Entity\Custmr newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Custmr[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Custmr get($primaryKey, $options = [])
 * @method \App\Model\Entity\Custmr findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Custmr patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Custmr[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Custmr|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Custmr saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Custmr[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Custmr[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Custmr[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Custmr[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CustmrTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('custmr');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasOne('Profile');
        // $this->hasMany('Profile', [
        //     'foreignKey' => 'custmr_id',
        // ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        return $validator;
    }
}
