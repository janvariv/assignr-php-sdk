<?php

namespace Assignr\Endpoints;

use Assignr\AssignrClient;

class Officials
{
    private AssignrClient $client;

    public function __construct(AssignrClient $client)
    {
        $this->client = $client;
    }

    public function list(array $params = [])
    {
        return $this->client->get('/officials', $params);
    }

    public function getById(int $id)
    {
        return $this->client->get("/officials/{$id}");
    }
}
