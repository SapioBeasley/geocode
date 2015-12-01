<?php

namespace Sapio\Geocode;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GeoCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function getCoordinates($address)
    {
        $response = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='  . urlencode($address));
        $response = json_decode($response, true);

        if (isset($response['results'][0])) {
            $addressLatLong = $response['results'][0]['geometry']['location'];
        }

        return $addressLatLong;
    }

}
