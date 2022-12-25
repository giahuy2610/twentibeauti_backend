<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class RetailPrice extends Model
{
    use HasFactory;
    protected $table = 'RetailPrice';
    protected $primaryKey = 'IDRetailPrice';
    protected $guarded = [];
    public $timestamps = false;

    public static function index(int $IDProduct)
    {
        return (RetailPrice::where('IDProduct', $IDProduct)->get());
    }

    /**
     * Display the current retail price of specified product.
     *
     * @param  \App\Models\RetailPrice  $retailPrice
     * @return \Illuminate\Http\Response
     */
    public static function showCurrent(int $IDProduct)
    {
        $retailPrice = RetailPrice::select('Price')->where('IDProduct', $IDProduct)->Where('StartOn', '<=', Carbon::now())->Where('EndOn', '>=', Carbon::now())->orderByDesc('CreatedOn')->first();
        if ($retailPrice == null) return $retailPrice;
        return $retailPrice->Price;
    }
}
