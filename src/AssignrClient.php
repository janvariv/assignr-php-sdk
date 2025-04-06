<?php

namespace Assignr;

use Assignr\Endpoints\Officials;
use Assignr\Endpoints\Assignments;

class AssignrClient
{
    private string $apiKey;
    private string $baseUrl = 'https://assignr.com/api/v2';

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function get(string $endpoint, array $params = [])
    {
        return Request::send($this->baseUrl, $this->apiKey, 'GET', $endpoint, $params);
    }

    public function post(string $endpoint, array $data = [])
    {
        return Request::send($this->baseUrl, $this->apiKey, 'POST', $endpoint, $data);
    }

    public function put(string $endpoint, array $data = [])
    {
        return Request::send($this->baseUrl, $this->apiKey, 'PUT', $endpoint, $data);
    }

    public function delete(string $endpoint)
    {
        return Request::send($this->baseUrl, $this->apiKey, 'DELETE', $endpoint);
    }

    public function officials(): Officials
    {
        return new Officials($this);
    }

    public function assignments(): Assignments
    {
        return new Assignments($this);
    }
}
