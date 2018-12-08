<?php

namespace estbase\Core\Domain\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\MessageBag;

abstract class LaravelAbstractRepository
{
    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->repository->all();
    }

    /**
     * @param int $id
     * @return Model
     */
    public function find(int $id): Model
    {
        return $this->repository->find($id);
    }

    /**
     * @param array $input
     * @return Model
     */
    public function create(array $input): Model
    {
        if (!$this->createValidator->with($input)->passes())
        {
            $this->errors = $this->createValidator->errors();
            return false;
        }

        return $this->repository->create($input);
    }

    /**
     * @param array $input
     * @return Model
     */
    public function update(array $input): Model
    {
        if( ! $this->updateValidator->with($input)->passes() )
        {
            $this->errors = $this->updateValidator->errors();
            return false;
        }

        return $this->repository->update($input);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        // Think about if I would delete an entity without softDelete, or force one entity with Forcedelete.
        return $this->repository->delete($id);
    }

    public function softDelete(int $id): bool
    {
        return $this->repository->delete($id);
    }

    /**
     * @return MessageBag
     */
    public function errors(): MessageBag
    {
        return $this->errors();
    }
}