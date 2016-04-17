# geocode

[![Build Status](https://travis-ci.org/SapioBeasley/geocode.svg)](https://travis-ci.org/SapioBeasley/geocode)
[![Latest Stable Version](https://poser.pugx.org/sapioweb/geocode/v/stable)](https://packagist.org/packages/sapioweb/geocode)
[![Total Downloads](https://poser.pugx.org/sapioweb/geocode/downloads)](https://packagist.org/packages/sapioweb/geocode)
[![Latest Unstable Version](https://poser.pugx.org/sapioweb/geocode/v/unstable)](https://packagist.org/packages/sapioweb/geocode)
[![License](https://poser.pugx.org/sapioweb/geocode/license)](https://packagist.org/packages/sapioweb/geocode)

PHP Address Geocoding for laravel using Google API

## Install

`composer require sapioweb/geocode`

Include `Sapioweb\Geocode\GeocodeServiceProvider::class,` in your `config/app.php`

## Usage

```php
use Sapioweb\Geocode\GeoCode;

Route::get('/', function () {


	$geocode = new Geocode;

	$address = '1600 Wigwam Pkwy, Henderson, NV 89074';

	$geocode = $geocode->getCoordinates($address);

	return view('welcome')->with(['geocode' => $geocode]);
});
```

Pull Latitude: `$geocode['geometry']['location']['lat']`
Pull Longitude: `$geocode['geometry']['location']['lng']`

### License

This software is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT). For questions please email andreas@sapioweb.com or info@sapioweb.com or visit [Sapioweb.com](https://sapioweb.com/) to learn more and get in contact
