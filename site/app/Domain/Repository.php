<?php
declare(strict_types=1);

namespace App\Domain;

class Repository
{
    protected $dataSet;
    protected $exception;

    public function __construct(array $dataSet = null)
    {
        $this->dataSet = $dataSet;
    }

    public function findAll(): array
    {
        return array_values($this->dataSet);
    }

    public function find(int $id): Model
    {
        if (!isset($this->$dataSet[$id])) {
            throw $this->exception->notFound();
        }

        return $this->dataSet[$id];
    }

}
