<?php

namespace App\Http\Controllers;
use Laravolt\Indonesia\Models\Village;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;

use Illuminate\Http\Request;

class LaravoltController extends Controller
{
    public function get_kota()
    {
        $province_id = request('province_id');
        $kota = \Indonesia::findProvince($province_id, ['cities'])->cities->sortBy('name')->pluck('name', 'id');
        return view('laravolt.list_kota', compact('kota'));
    }

    public function get_kecamatan()
    {
        $city_id = request('city_id');
        $kecamatan = \Indonesia::findCity($city_id, ['districts'])->districts->sortBy('name')->pluck('name', 'id');

        return view('laravolt.list_kecamatan', compact('kecamatan'));
    }
    public function get_kelurahan()
    {
        $kecamatan_id = request('kecamatan_id');
        $kelurahan = \Indonesia::findDistrict($kecamatan_id, ['villages'])->villages->sortBy('name')->pluck('name', 'id');

        return view('laravolt.list_kelurahan', compact('kelurahan'));
    }
}
