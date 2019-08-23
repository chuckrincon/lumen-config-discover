# Lumen Config Discover

Lumen Config Discover is a package to your configuration files with ease using teh power of the `Service Providers`.

## Why? Lumen does not support config files?

Actually, Lumen does support custom configuration files, but they need to be [enabled first](https://lumen.laravel.com/docs/5.8/configuration#accessing-configuration-values).<br />
And to be honest, if you have a lot of `config` this method will be a little messy.

## Installation

Use composer to install Lumen Config Discover.

```bash
composer require chuckrincon/lumen-config-discover
```

## Usage

After download the package form composer, you need to add the following line in your `bootstrap/app.php` file to register the provider.

```php
$app->register(Chuckrincon\LumenConfigDiscover\DiscoverServiceProvider::class);
```

And that's all, you are ready to go:

## How it works?

The `DiscoverServiceProvider` automatically search and validates if the config folder exists and map all the files in it,
then will register all the folder configuration files, if the folder does not exists is throwing a `FileNotFoundException`.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## Author

👤 **Chuck Rincon**

- Twitter: [@chuckrincon](https://twitter.com/chuckrincon)
- Github: [@chuckrincon](https://github.com/chuckrincon)

## Show your support

Please ⭐️ this repository if this project helped you!

## 📝 License

Copyright © 2019 [Chuck Rincon](https://github.com/chuckrincon). <br />
This project is [MIT](https://github.com/chuckrincon/lumen-config-discover/blob/master/LICENSE) licensed.
