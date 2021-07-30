<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_transaksi extends Model
{
    protected $table = 'tb_transaksis';

    protected $primaryKey = 'id_transaksi';

    protected $fillable = ['id_barang','jumlah_pembelian'];

    public function barang(){
 		return $this->belongTo('App\tb_barang','id_barang','id_barang');
    }

     
}
