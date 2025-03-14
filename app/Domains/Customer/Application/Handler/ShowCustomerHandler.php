<?php

namespace App\Domains\Customer\Application\Handler;


use App\Domains\Customer\Application\Queries\ShowCustomerQuery;
use App\Domains\Customer\Domain\Entities\CustomerEntity;
use App\Domains\Customer\Domain\Repositories\CustomerRepositoryInterface;

readonly class ShowCustomerHandler
{
    public function __construct(private CustomerRepositoryInterface $repository)
    {
    }

    public function handle(ShowCustomerQuery $query): CustomerEntity
    {
        return $this->repository->getById($query->id);
    }
}
