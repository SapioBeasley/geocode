<?php
use Sapioweb\Geocode\GeoCode as Geocode;

class GeocodeTest extends \PHPUnit_Framework_TestCase
{

  public function testGetCoordinate()
  {
    $address = '3330 florecita dr altadena ca 91101';

    $result = Geocode::getCoordinates($address);

    $expectedLat = '34.202516';
    $expectedLng = '-118.162214';

    // Test
    $this->assertEquals($result['lat'], $expectedLat);
    $this->assertEquals($result['lng'], $expectedLng);
  }
}
