<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $fillable = ['deposite_id', 'date', 'amount', 'method', 'buser_id'];

    public function user(){
        return $this->belongsTo(BankUser::class, 'buser_id');
    }
}
