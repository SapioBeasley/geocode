# geocode

[![Build Status](https://travis-ci.org/SapioBeasley/geocode.svg)](https://travis-ci.org/SapioBeasley/geocode)
[![Latest Stable Version](https://poser.pugx.org/sapio/geocode/v/stable)](https://packagist.org/packages/sapio/geocode)
[![Total Downloads](https://poser.pugx.org/sapio/geocode/downloads)](https://packagist.org/packages/sapio/geocode)
[![Latest Unstable Version](https://poser.pugx.org/sapio/geocode/v/unstable)](https://packagist.org/packages/sapio/geocode)
[![License](https://poser.pugx.org/sapio/geocode/license)](https://packagist.org/packages/sapio/geocode)

PHP geocoding for laravel using Google API

## Install

`composer require sapio/geocode`

Include `Sapio\Geocode\GeocodeServiceProvider::class,` in your `config/app.php`

## Usage

```php
use Sapio\Geocode\GeoCode as Geocode;

Route::get('/', function () {

	$address = '1600 Wigwam Pkwy, Henderson, NV 89074';

	$geocode = Geocode::getCoordinates($address);

	return view('welcome')->with(['geocode' => $geocode]);
});
```

Pull Latitude: `$geocode['lat']`
Pull Longitude: `$geocode['lng']`
