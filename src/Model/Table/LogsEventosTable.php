<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LogsEventos Model
 *
 * @method \App\Model\Entity\LogsEvento newEmptyEntity()
 * @method \App\Model\Entity\LogsEvento newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\LogsEvento> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LogsEvento get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\LogsEvento findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\LogsEvento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\LogsEvento> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LogsEvento|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\LogsEvento saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\LogsEvento>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\LogsEvento>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\LogsEvento>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\LogsEvento> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\LogsEvento>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\LogsEvento>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\LogsEvento>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\LogsEvento> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LogsEventosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('logs_eventos');
        $this->setDisplayField('evento');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('evento')
            ->maxLength('evento', 100)
            ->requirePresence('evento', 'create')
            ->notEmptyString('evento');

        $validator
            ->scalar('descricao')
            ->allowEmptyString('descricao');

        return $validator;
    }
}
