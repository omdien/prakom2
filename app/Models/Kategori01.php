<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori01 extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //protected $fillable = ['kate01_id', 'kate01_kategori'];

    public function kategori02()
    {
        return $this->hasMany(Kategori02::class);
    }
}
