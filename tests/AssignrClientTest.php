<?php

use PHPUnit\Framework\TestCase;
use Assignr\AssignrClient;

final class AssignrClientTest extends TestCase
{
    public function testClientCanBeInstantiated()
    {
        $client = new AssignrClient('dummy-key');
        $this->assertInstanceOf(AssignrClient::class, $client);
    }
}
