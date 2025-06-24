# DanielleFence Dropdown

DaisyUI‑powered dropdown Blade component for links and actions.

A flexible dropdown Blade component for Laravel, supporting both href links and interactive button actions, with full integration into the DanielleFence component suite.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/daniellefence/dropdown.svg?style=flat-square)](https://packagist.org/packages/daniellefence/dropdown)
[![Total Downloads](https://img.shields.io/packagist/dt/daniellefence/dropdown.svg?style=flat-square)](https://packagist.org/packages/daniellefence/dropdown)
![GitHub Actions](https://github.com/daniellefence/dropdown/actions/workflows/main.yml/badge.svg)

This package provides a reusable dropdown Blade component styled with Tailwind and DaisyUI, built for Laravel projects. It supports standard href links as well as dynamic actions using Alpine, Livewire, or JavaScript via `click` bindings. It integrates seamlessly with the DanielleFence button and icon components.

## Installation

You can install the package via composer:

```bash
composer require daniellefence/dropdown
```

## Usage

```blade
<x-df::dropdown
    label="Options"
    variant="info"
    :items="[
        ['label' => 'View', 'href' => '/view', 'target' => '_blank'],
        ['label' => 'Edit', 'click' => 'wire:click=\'editProject\''],
        ['label' => 'Delete', 'click' => 'wire:click=\'deleteProject\''],
    ]"
/>
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email sbarron@daniellefence.net instead of using the issue tracker.

## Credits

-   [Shane Barron](https://github.com/daniellefence)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
