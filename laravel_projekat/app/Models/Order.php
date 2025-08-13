<?php

namespace App\Models;

use App\Models\Orderitem;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'tracking_no',
        'fullname',
        'email',
        'phone',
        'address',
        'status_message'
    ];
    /**
     * Get all of the orderItems for the Order
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany;
     */

    public function orderItems(): HasMany
    {
        return $this->hasMany(Orderitem::class, 'order_id', 'id');
    }
    
}
