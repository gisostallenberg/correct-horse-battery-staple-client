# correct-horse-battery-staple-client
Client to query the microservice for the password strength checker 'correct-horse-battery-staple' 

## Usage
```bash
composer require gisostallenberg/correct-horse-battery-staple-client
```

```php
<?php

use GisoStallenberg\CorrectHorseBatteryStapleClient\CorrectHorseBatteryStapleClient;

include __DIR__ . '/vendor/autoload.php';

$results = CorrectHorseBatteryStapleClient::check('correcthorsebatterystaple', 'https://mypasswordchecker.com/') );
```
