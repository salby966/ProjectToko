<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_jenis_barang extends Model
{
    protected $table = 'tb_jenis_barang';

    protected $primaryKey = 'id_jenis_barang';

    protected $fillable = ['nama_jenis_barang'];

    public function barang(){
 		return $this->belongTo('App\tb_barang','id_jenis_barang','id_jenis_barang');
    }
}
