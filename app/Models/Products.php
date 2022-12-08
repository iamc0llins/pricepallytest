<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity', 
        'demand_increase',  
        'total_slot',  
        'slot_booked',  
        'expiry_date',  
        'delivery_date',  
        'slot_per_person',  
        'is_recommend',  
        'price',  
        'old_price',  
        'status',  
        'initial_quantity',  
        'quantity_remaining',  
        'unit',  
        'category',  
        'is_in_season',  
        'image_thumbnail',  
    ];

    protected $dates = ['delivery_date', 'expiry_date'];

    // protected $appends = ['time_left'];

    // public function getTimeLeftAttribute()
    // {

    //     return $this->image_thumbnail_path . $this->image_thumbnail;
    // }

}
