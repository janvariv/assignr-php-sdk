# Assignr PHP SDK

A lightweight PHP SDK to interact with the Assignr API.

## Installation

```bash
composer require janvariv/assignr-php-sdk
```

## Usage

```php
use Assignr\AssignrClient;

$client = new AssignrClient('your-api-key');
$officials = $client->officials()->list();
print_r($officials);
```
