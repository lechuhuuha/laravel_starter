<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'number',
        'address',
        'total_price',
        'status'
    ];
    public function invoiceDetails()
    {
        return $this->hasMany(InvoiceDetail::class, 'invoice_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function getTotalpriceAttribute()
    {

        return $this->attributes['total_price'] . "VND";
    }
}
