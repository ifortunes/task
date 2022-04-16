<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\v1\{ChartRequest, ChartUpdateRequest};
use App\Services\Api\v1\ChartService;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        return ChartService::index();
    }

    public function store(ChartRequest $request)
    {
        return response()->json(ChartService::store($request->get('data')));
    }

    public function edit(ChartUpdateRequest $request)
    {
        return response()->json(ChartService::edit($request->get('data')));
    }

    public function remove(int $id)
    {

        return response()->json(ChartService::remove($id), 200);
    }
}
