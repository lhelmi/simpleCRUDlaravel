<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    //menggunakan fungsi soft delete
    use SoftDeletes;

    //pake jika tidak menggunakan aturan jamak
    //protected $table = 'my_articles';

    //eloquent : create mass assignment
    // protected $fillable = ['title', 'subject'];

    //menproteksi agar id tidak dibuat manual oleh user saat menambahkan file
    protected $guarded = ['id'];
}
