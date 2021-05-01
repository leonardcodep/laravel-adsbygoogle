# Adsense for Laravel 5, 6, 7 y 8

Package to include Google Adsense ads in your Laravel project.

## Installation

In your project root run

```
composer require leonardcodep/laravel-adsbygoogle
```

### Set up config file

Run `php artisan vendor:publish`.

Edit the generated config file in `/config/adsbygoogle.php` to add your ad units

```php
return [
    'client_id' => 'YOUR_CLIENT_ID', //Your Adsense client ID e.g. ca-pub-9508939161510421
    'ads' => [
        'responsive' => [
            'ad_unit_id' => 12345678901,
            'ad_format' => 'auto'
            'ad_full_width_responsive' => true
        ],
        'rectangle' => [
            'ad_unit_id' => 1234567890,
            'ad_style' => 'display:inline-block;width:300px;height:250px',
            'ad_format' => 'auto'
        ]
    ]
];
```

### Register the package with Laravel

This package is for Laravel 5.5+ so it takes advantage of auto discover, so no manual configuration is needed


## Usage
To show ads in your blade templates simply use `{!! Adsbygoogle::show('responsive') !!}` , for example.
