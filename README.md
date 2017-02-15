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

Notice that the number must have a prefix of ``1`` or whatever country code is appropriate for the number.  See the [documentation](https://numverify.com/documentation) for more information.
