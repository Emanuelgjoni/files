<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill extends Model
{
    protected $fillable = [
        'data',
        'pershkrimi',
        'Kategoria',
        'Cmimi',
        'sasi',
        'TotalPaTVSHimi',
        'TVSH',
        'TotalmeTVSH',
        'user_id'
    ];



    use HasFactory ,  SoftDeletes;
    public function user (){
        return $this->belongsTo(User::class);
    }
}
