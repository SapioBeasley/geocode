<?php

namespace Sapioweb\Geocode;

use Illuminate\Http\Request;

use App\Http\Requests;

class GeoCode
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function getCoordinates($address)
    {
        $addressLatLong = [];

        $response = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='  . urlencode($address));
        $response = json_decode($response, true);

        if (isset($response['results'][0])) {
            $addressLatLong = $response['results'][0];
        }

        return $addressLatLong;
    }

}
