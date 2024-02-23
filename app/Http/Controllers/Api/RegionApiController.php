<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RegionResource;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionApiController extends Controller
{
    public function getRegions(Request $request)
    {
        $language = $request->language;
        $regions = Region::all();

        return RegionResource::collection($regions)
            ->additional(['language' => $language]);
    }
}
