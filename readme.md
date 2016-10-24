# NumVerify

A PHP library for working w/ the [NumVerify](https://numverify.com) API.

## Install

Normal install via Composer.

## Usage

There is only one method to call:

```php
use Travis\NumVerify;

// run request
$response = NumVerify::run($myapikey, '12025551234');
```

See the [documentation](https://numverify.com/documentation) for more information.