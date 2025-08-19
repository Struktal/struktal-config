# Struktal-Config

This is a PHP library for configuring Struktal applications.

# Installation

To install this library, include it in your project using Composer:

```bash
composer require struktal/struktal-config
```

# Usage

Before you can use this library, you need to customize a few parameters.
You can do this in the startup of your application:

```php
\struktal\Config\Config::setConfigDirectory("path/to/your/config.json");
```

Then, you can use the library's features in your code.

## Read information from your config

To read information from the config file, you can use the `Config` class:

```php
$config = new \struktal\Config\Config();
$configVar = $config->get("configVar");
$nestedConfigVar = $config->get("nested", "configVar");
$defaultConfigVar = $config->getDefault(42, "defaultConfigVar");
```

# License

This software is licensed under the MIT license.
See the [LICENSE](LICENSE) file for more information.
