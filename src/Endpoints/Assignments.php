<?php

namespace Assignr\Endpoints;

use Assignr\AssignrClient;

class Assignments
{
    private AssignrClient $client;

    public function __construct(AssignrClient $client)
    {
        $this->client = $client;
    }

    public function list(array $params = [])
    {
        return $this->client->get('/assignments', $params);
    }

    public function getById(int $id)
    {
        return $this->client->get("/assignments/{$id}");
    }
}
