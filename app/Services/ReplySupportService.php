<?php 

namespace App\Services;

use App\DTO\Replies\CreateReplyDTO;
use App\Repositories\Eloquent\ReplySupportRepository;
use stdClass;

class ReplySupportService
{
    public function __construct(
        protected ReplySupportRepository $repository,
    ){}

    public function getAllBySupportId(string $supportId): array
    {
        return $this->repository->getAllBySupportId($supportId);
    }

    public function createNew(CreateReplyDTO $dto): stdClass
    {
        return $this->repository->createNew($dto);
    }

    public function delete(string $id): bool
    {
        return $this->repository->delete($id);
    }

}
