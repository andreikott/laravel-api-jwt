<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price'];

    public function scopePriceMin($query, $request)
    {
        if (!is_null($request->get('price_min'))) {
            return $query->where('price', '>=', $request->get('price_min'));
        }
    }

    public function scopePriceMax($query, $request)
    {
        if (!is_null($request->get('price_max'))) {
            return $query->where('price', '>=', $request->get('price_max'));
        }
    }

    public function scopeDateMin($query, $request)
    {
        if (!is_null($request->get('date_min'))) {
            return $query->where('created_at', '>=', $request->get('date_min'));
        }
    }

    public function scopeDateMax($query, $request)
    {
        if (!is_null($request->get('date_max'))) {
            return $query->where('created_at', '>=', $request->get('date_max'));
        }
    }

    public function scopeDateSort($query, $request)
    {
        if ($request->get('date_sort') == 'asc') {
            return $query->orderby('created_at', 'asc');
        } else {
            return $query->orderby('created_at', 'desc');
        }
    }

    public function scopeNameSort($query, $request)
    {
        if ($request->get('date_sort') == 'desc') {
            return $query->orderby('name', 'desc');
        } else {
            return $query->orderby('name', 'asc');
        }
    }
}
