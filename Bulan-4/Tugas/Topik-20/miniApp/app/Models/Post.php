<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;
    //kalo fillable yang di cantumkan bole di isi sisanya ga bole
    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'slug',
        'image',
        'excerpt',
        'body',
    ];

    protected $with = [
        'author',
        'category',
    ];

    public function scopeFilter($query, array $filters)
    {
        //sebenarnya sama saja seperti query d bawah hanya saja lebih simple
        // if(isset($filters['search']) ? $filters['search'] : false){}
        //bisa mencari 2 flter sekaligus menggunakan when
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where(function($query) use($search){
            $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%');
            });
        });
        //whereHas untuk tabel relasi kepada tabel induk
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use($category){
                $query->where('slug', $category);
            });
        });
        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    //kalo guarded yang di cantumkan tak bole di isi sisanya bole
    // protected $guarded = [ 'id', ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
