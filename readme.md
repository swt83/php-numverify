# NumVerify

A PHP library for working w/ the [NumVerify](https://numverify.com) API.

## Install

Normal install via Composer.

## Usage

Call any API method and pass params as a single array:

```php
use Travis\NumVerify;

// run request
$response = NumVerify::run($myapikey, '12025551234');
```

See the [documentation](https://numverify.com/documentation) for more information.