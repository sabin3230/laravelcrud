<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankUser extends Model
{
    use HasFactory;

    protected $fillable = ['buser_id', 'name','address','phone_no', 'bank_id', 'deposite_id'];

    public function bank(){
        return $this->hasOne(Bank::class );
    }

    public function deposite(){

        return $this->hasMany(Deposit::class);
    }
}
