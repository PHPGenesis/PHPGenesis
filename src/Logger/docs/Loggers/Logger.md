---
title: Logger
---

# Logger Class Documentation

The `Logger` class is part of the `PHPGenesis\Logger` namespace. This class provides methods to log messages. It implements the `ILogger` interface and uses either
the `LaravelLogger` or `MonoLogger` depending on if `laravel/framework` or `illuminate/support` are installed via Composer.

For all class methods, if `laravel/framework` or `illuminate/support` are installed, the `LaravelLogger` will be used. Otherwise, the `MonoLogger` will be used.

`LaravelLogger` and `MonoLogger` are both implementations of the `ILogger` interface and are internal to `PHPGenesis/Logger` and should not be used directly.

## Usage

To use this class, you need to call the static methods with the message and optional context array. Here is an example:

```php
Logger::info('This is an informational message');
```

In this example, we are logging an informational message. The `Logger` class will check if Laravel support is installed and use the appropriate logger.