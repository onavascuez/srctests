<?php

namespace estbase\Core\Domain\Repository;

use srctests\SharedKernel\Domain\Entity\EntityInterface;
use srctests\SharedKernel\Domain\Exception\EntityNotFoundException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface EntityRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;

    /**
     * @param string $id
     * @return EntityInterface|null
     */
    public function find(string $id): EntityInterface;

    /**
     * @param int $id
     * @return EntityInterface
     * @throws EntityNotFoundException
     */
    public function get(string $id): Model;

    /**
     * @param $entity
     * @return mixed
     */
    public function save($entity);

    /**
     * @param int $id
     * @return int
     */
    public function delete(int $id): int;

}