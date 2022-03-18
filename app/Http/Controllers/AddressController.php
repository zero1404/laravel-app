<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vanthao03596\HCVN\Models\Province;
use Vanthao03596\HCVN\Models\District;

class AddressController extends Controller
{

    public function getProvinces(Request $request)
    {
        $provinces = Province::get();
        if ($request->ajax()) {
            return response()->json(['provinces' => $provinces], 200);
        }
        return abort(404);
    }

    public function getDistricts(Request $request, $id)
    {
        if ($request->ajax()) {
            $province = Province::find($id);
            if ($province) {
                $districts = $province->districts;
                return response()->json(['districts' => $districts], 200);
            }
            return response()->json(['message' => 'Có lỗi xảy ra', 'type' => 'request'], 400);
        }
        return abort(404);
    }

    public function getWards(Request $request, $id)
    {
        if ($request->ajax()) {
            $district = District::find($id);
            if ($district) {
                $wards = $district->wards;
                return response()->json(['wards' => $wards], 200);
            }
            return response()->json(['message' => 'Có lỗi xảy ra', 'type' => 'request'], 400);
        }
        return abort(404);
    }
}
