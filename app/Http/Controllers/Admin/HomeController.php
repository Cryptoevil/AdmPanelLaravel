<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'           => 'Total cards amount',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Card',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
        ];

        $settings1['total_number'] = $settings1['model']::when(isset($settings1['filter_field']), function ($query) use ($settings1) {
            if (isset($settings1['filter_days'])) {
                return $query->where(
                    $settings1['filter_field'],
                    '>=',
                    now()->subDays($settings1['filter_days'])->format('Y-m-d')
                );
            } else if (isset($settings1['filter_period'])) {
                switch ($settings1['filter_period']) {
                    case 'week':
                        $start  = date('Y-m-d', strtotime('last Monday'));
                        break;
                    case 'month':
                        $start = date('Y-m') . '-01';
                        break;
                    case 'year':
                        $start  = date('Y') . '-01-01';
                        break;
                }

                if (isset($start)) {
                    return $query->where($settings1['filter_field'], '>=', $start);
                }
            }
        })
            ->{$settings1['aggregate_function'] ?? 'count'}($settings1['aggregate_field'] ?? '*');

        $settings2 = [
            'chart_title'           => 'Total cards amount by last week',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Card',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_days'           => '7',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
        ];

        $settings2['total_number'] = $settings2['model']::when(isset($settings2['filter_field']), function ($query) use ($settings2) {
            if (isset($settings2['filter_days'])) {
                return $query->where(
                    $settings2['filter_field'],
                    '>=',
                    now()->subDays($settings2['filter_days'])->format('Y-m-d')
                );
            } else if (isset($settings2['filter_period'])) {
                switch ($settings2['filter_period']) {
                    case 'week':
                        $start  = date('Y-m-d', strtotime('last Monday'));
                        break;
                    case 'month':
                        $start = date('Y-m') . '-01';
                        break;
                    case 'year':
                        $start  = date('Y') . '-01-01';
                        break;
                }

                if (isset($start)) {
                    return $query->where($settings2['filter_field'], '>=', $start);
                }
            }
        })
            ->{$settings2['aggregate_function'] ?? 'count'}($settings2['aggregate_field'] ?? '*');

        return view('home', compact('settings1', 'settings2'));
    }
}
