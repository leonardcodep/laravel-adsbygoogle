# Adsense for Laravel 5, 6, 7 y 8

Package to include Google Adsense ads in your Laravel project.

## Installation

In your project root run

```
composer require leonardcodep/laravel-adsbygoogle
```

### Set up config file

Run `php artisan vendor:publish --provider="Leonardcodep\Adsbygoogle\AdsbygoogleServiceProvider" --tag="config"`.

Run (Optional) `php artisan vendor:publish --provider="Leonardcodep\Adsbygoogle\AdsbygoogleServiceProvider" --tag="views"`.

Edit the generated config file in `/config/adsbygoogle.php` to add your ad units

```php
return [
    'client_id' => 'YOUR_CLIENT_ID', //Your Adsense client ID e.g. ca-pub-9508939161510421
    'ads' => [
        'responsive' => [
            'ad_slot' => 12345678901,
            'ad_format' => 'auto',
            'ad_full_width_responsive' => true
        ],
        'rectangle' => [
            'ad_slot' => 5681560223,
            'ad_style' => 'display:inline-block;width:300px;height:250px',
        ],
        'inArticle' => [
            'ad_layout' => 'in-article',
            'ad_format' => 'fluid',
            'ad_slot' => 5149408889,
            'ad_style' => 'display:block; text-align:center;'
        ]
    ]
];
```

### Register the package with Laravel

This package is for Laravel 5.5+ so it takes advantage of auto discover, so no manual configuration is needed


## Usage

1°- Copy and paste this code into your website's HTML, between the `<head> and </head>` tags.

```blade
    @scriptadsbygoogle
```
Show directive 
```javascript
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=CLIENT_ID" crossorigin="anonymous"></script>
```

2°- (Optional) Copy and paste this code into your website's HTML, between the `<head> and </head>` tags.

```blade
    @anchoradsbygoogle
```
Show directive 
```javascript
     <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "CLIENT_ID",
            enable_page_level_ads: true,
            overlays: {bottom: true}
        });
    </script
```

3°- Copy and paste this code into your website's HTML, at the end before closing the and `</body>` tag.

```blade
    @pushadsbygoogle
```
Show directive 
```javascript
<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
```

4°- To show ads in your blade templates simply use `{!! Adsbygoogle::show('responsive') !!}` , for example.
