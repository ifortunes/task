<?php

namespace App\Services\Api\v1;

use App\Http\Resources\Api\v1\ChartListResource;
use App\Models\Chart;

class ChartService
{
    public static function index()
    {
        return static::getCharts();
    }

    public static function show($id)
    {
        return new ChartResource(Chart::findOrFail($id));
    }

    /**
     * @param array $data
     * @return void
     */
    public static function store(array $data)
    {
        Chart::create($data);

        return static::getCharts();
    }

    public static function edit(array $data)
    {
        $chart = Chart::findOrFail($data['id']);

        $chart->update($data['data']);

        return static::getCharts();
    }

    public static function remove($id)
    {
        Chart::destroy($id);

        return static::getCharts();
    }

    public static function getCharts()
    {
        return new ChartListResource(Chart::all());
    }
}
