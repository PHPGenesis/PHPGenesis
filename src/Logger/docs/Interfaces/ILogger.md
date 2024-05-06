---
title: ILogger
---

# ILogger Interface Documentation

The `ILogger` interface is part of the `PHPGenesis\Logger` namespace. This interface defines the contract for a logger in the PHPGenesis framework. It provides a set of
methods that any class implementing this interface must define.

## Interface Methods

### Debug

```php
public static function debug(string $message, ?array $context = []): void
```

This method is used to log a debug message. It accepts a string message and an optional context array.

### Info

```php
public static function info(string $message, ?array $context = []): void
```

This method is used to log an informational message. It accepts a string message and an optional context array.

### Notice

```php
public static function notice(string $message, ?array $context = []): void
```

This method is used to log a notice message. It accepts a string message and an optional context array.

### Warning

```php
public static function warning(string $message, ?array $context = []): void
```

This method is used to log a warning message. It accepts a string message and an optional context array.

### Error

```php
public static function error(string $message, ?array $context = []): void
```

This method is used to log an error message. It accepts a string message and an optional context array.

### Critical

```php
public static function critical(string $message, ?array $context = []): void
```

This method is used to log a critical message. It accepts a string message and an optional context array.

### Alert

```php
public static function alert(string $message, ?array $context = []): void
```

This method is used to log an alert message. It accepts a string message and an optional context array.

### Emergency

```php
public static function emergency(string $message, ?array $context = []): void
```

This method is used to log an emergency message. It accepts a string message and an optional context array.

## Usage

To use this interface, you need to create a class that implements it and define all the methods. Here is an example:

```php
class MyLogger implements ILogger
{
    public static function debug(string $message, ?array $context = []): void
    {
        // Implementation here
    }

    // Define the rest of the methods...
}
```

In this example, we are creating a new class `MyLogger` that implements the `ILogger` interface. The `MyLogger` class must define all the methods from the `ILogger`
interface. For your convenience, we have provided an implementation for you in the `PHPGenesis\Logger\Logger` class. You can use this class directly to log messages.