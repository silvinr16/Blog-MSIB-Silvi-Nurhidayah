<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'image', 'is_published', 'category_id', 'author_id'];

    // Relasi ke tabel kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi ke tabel author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}