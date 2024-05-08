<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    Protected $fillable = ['categorie_fr','categorie_en','image','description_fr','description_en','lien_image','texte_fr','texte_en'];
}