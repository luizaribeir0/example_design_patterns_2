<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emprestimos Model
 *
 * @method \App\Model\Entity\Emprestimo newEmptyEntity()
 * @method \App\Model\Entity\Emprestimo newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Emprestimo> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Emprestimo findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Emprestimo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Emprestimo> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Emprestimo saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Emprestimo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Emprestimo>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Emprestimo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Emprestimo> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Emprestimo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Emprestimo>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Emprestimo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Emprestimo> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmprestimosTable extends Table
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

        $this->setTable('emprestimos');
        $this->setDisplayField('livro_titulo');
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
            ->scalar('livro_titulo')
            ->maxLength('livro_titulo', 255)
            ->requirePresence('livro_titulo', 'create')
            ->notEmptyString('livro_titulo');

        $validator
            ->scalar('usuario_email')
            ->maxLength('usuario_email', 255)
            ->requirePresence('usuario_email', 'create')
            ->notEmptyString('usuario_email');

        $validator
            ->date('data_emprestimo')
            ->requirePresence('data_emprestimo', 'create')
            ->notEmptyDate('data_emprestimo');

        $validator
            ->date('data_prevista')
            ->requirePresence('data_prevista', 'create')
            ->notEmptyDate('data_prevista');

        $validator
            ->date('data_devolucao')
            ->allowEmptyDate('data_devolucao');

        $validator
            ->decimal('valor_multa')
            ->allowEmptyString('valor_multa');

        $validator
            ->scalar('status')
            ->allowEmptyString('status');

        return $validator;
    }
}
