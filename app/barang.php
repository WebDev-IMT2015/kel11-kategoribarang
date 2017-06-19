<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'barangs';

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
    protected $fillable = ['namabarang','tipe','deskripsi','dimensi','berat','foto'];

    
}
