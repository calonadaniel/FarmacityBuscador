<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class descuentosGlobales_Articulos extends Model
{
    use HasFactory;

    protected $table = 'L@Red_Software_DescuentosGlobales_Articulos';
    Protected $primaryKey = ["itemlookupcode", "StoreID"];


    public function item()
    {
                                                    //foreign key
        return $this->belongsTo('App\Models\item', 'itemlookupcode' );
    }


    public function store()
    {
                                                    //foreign key
        return $this->belongsTo('App\Models\StoreID', 'StoreID' );
    }

}
