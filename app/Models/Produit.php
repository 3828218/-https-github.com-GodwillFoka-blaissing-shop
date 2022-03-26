<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Produit extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'produits';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'etat', 'descrition','image', 'cathegorie_id'];

    public function cathegorie()
    {
        return $this->belongsTo('App\Models\Cathegorie');
    }

    public function getImageAttribute($value) {
        return $value ? url(Storage::url($value)) : $value;
    }
}
