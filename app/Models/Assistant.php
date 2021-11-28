<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistant extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'code',
        'membership_id'
    ];

    public function membership(){
        return $this->hasOne(Membership::class, 'id', 'membership_id');
    }

    use HasFactory;
}
