<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model {
    use HasFactory;

    /**  
     * Custome table name
     * secara default Model akan mencari table berdasarkan nama jamak dari nama kelas
     * ex: Note, Model akan mencari table notes, agar Model mencari table kita inginkan gunakan perintah berikut
     * protected $table = "my_table"; 
     */ 
    protected $primaryKey = "note_id";
    protected $guarded = ['note_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
