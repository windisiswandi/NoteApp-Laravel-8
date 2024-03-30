<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = "category_id";
    protected $guarded = ['category_id'];
    public $timestamps = false;

    public function notes() {
        return $this->hasMany(Note::class, "category_id");
    }
}
