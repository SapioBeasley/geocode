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
    public static function getCoordinates($address, $apiKey=null) {
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address);
        if (!empty($apiKey)) {
            $url .= "&key={$apiKey}";
        }

        $response = file_get_contents($url);
        $response = json_decode($response, true);

        $addressLatLong = [];
        if (isset($response['results'][0])) {
            $addressLatLong = $response['results'][0];
        }

        return $addressLatLong;
    }
}
