# compress

[![Maintainer](http://img.shields.io/badge/maintainer-@alexdeovidal-blue.svg?style=flat-square)](https://instagram.com/alexdeovidal)
[![Source Code](http://img.shields.io/badge/source-erykai/compress-blue.svg?style=flat-square)](https://github.com/erykai/compress)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/erykai/compress.svg?style=flat-square)](https://packagist.org/packages/erykai/compress)
[![Latest Version](https://img.shields.io/github/release/erykai/compress.svg?style=flat-square)](https://github.com/erykai/compress/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Quality Score](https://img.shields.io/scrutinizer/g/erykai/compress.svg?style=flat-square)](https://scrutinizer-ci.com/g/erykai/compress)
[![Total Downloads](https://img.shields.io/packagist/dt/erykai/compress.svg?style=flat-square)](https://packagist.org/packages/erykai/compress)

Reduce the size of images, pdf, audio and videos

## Installation

Composer:

```bash
"erykai/compress": "1.0.*"
```

Terminal

```bash
composer require erykai/compress
```
Compress img .jpg, .gif, .png and more
```php
use Erykai\Compress\Compress;

require "config.php";
require "vendor/autoload.php";

(new Compress(__DIR__ . "/storage/", "file.jpg", 25))->img()->send();
```

Compress pdf
```php
use Erykai\Compress\Compress;

require "config.php";
require "vendor/autoload.php";

(new Compress(__DIR__ . "/storage/", "file.pdf", 25))->pdf()->send();
```

## Contribution

All contributions will be analyzed, if you make more than one change, make the commit one by one.

## Support

If you find faults send an email reporting to webav.com.br@gmail.com.

## Credits

- [Alex de O. Vidal](https://github.com/alexdeovidal) (Developer)
- [All contributions](https://github.com/erykai/compress/contributors) (Contributors)

## License

The MIT License (MIT). Please see [License](https://github.com/erykai/compress/LICENSE) for more information.
