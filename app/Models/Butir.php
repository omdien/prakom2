<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Butir extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];
    protected $with = ['kategori02', 'jenjang'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['cari'] ?? false, function ($query, $cari) {
            return $query->where('but_kegiatan', 'like', '%' . $cari . '%')
                ->orWhere('but_desc', 'like', '%' . $cari . '%');
        });

        $query->when($filters['kategori02'] ?? false, function ($query, $kategori02) {
            return $query->whereHas('kategori02', function ($query) use ($kategori02) {
                $query->where('kat02_slug', $kategori02);
            });
        });

        $query->when(
            $filters['jenjang'] ?? false,
            fn ($query, $jenjang) =>
            $query->whereHas(
                'jenjang',
                fn ($query) =>
                $query->where('jen_slug', $jenjang)
            )
        );
    }

    public function kategori02()
    {
        return $this->belongsTo(Kategori02::class);
    }

    public function jenjang()
    {
        return $this->belongsTo(Jenjang::class);
    }

    public function getRouteKeyName()
    {
        return 'but_slug';
    }

    public function sluggable(): array
    {
        return [
            'but_slug' => [
                'source' => 'but_kegiatan'
            ]
        ];
    }
}
