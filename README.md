# Webtown Doctrine Schema Update Bundle

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Install

Via Composer

``` bash
$ composer require webtown/doctrine-schema-update-bundle
```

And register in the `app/AppKernel.php`, **AFTER** the `DoctrineBundle`:

``` php
<?php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
        //...
        new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
        //...
        // Afer the DoctrineBundle
        new Webtown\DoctrineSchemaUpdateBundle\WebtownDoctrineSchemaUpdateBundle(),
        //...
        );
    }
}
```

## Usage

``` php
$skeleton = new League\Skeleton();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
