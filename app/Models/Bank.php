<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = ['bank_id', 'branch_name', 'account_no', 'buser_id'];

    public function user(){
        return $this->belongsTo(BankUser::class, 'buser_id');
    }


}
