<?php

namespace App\Http\Controllers;

use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Village;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getProvinces()
    {
        $provinces = Province::all();
        
        return response()->json($provinces);
    }

    public function getRegencies($province_id)
    {
        $regencies = City::where('province_id', $province_id)->get();
        
        return response()->json($regencies);
    }

    public function getDistricts($regency_id)
    {
        $districts = District::where('regency_id', $regency_id)->get();
        
        return response()->json($districts);
    }

    public function getVillages($district_id)
    {
        $villages = Village::where('district_id', $district_id)->get();
        
        return response()->json($villages);
    }
}
