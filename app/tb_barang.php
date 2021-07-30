<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_barang extends Model
{
    protected $table = 'tb_barangs';

    protected $primaryKey = 'id_barang';

    protected $fillable = ['id_jenis_barang','nama_barang','stok_barang'];

    public function transaksi(){
 		return $this->hasMany('App\tb_transaksi','id_barang','id_barang');
    }

    public function jenis_barang(){
    	return $this->hasMany('App\tb_jenis_barang','id_jenis_barang','id_jenis_barang');
    }
    public function produk(){
    	return $this->belongsToMany('App\tb_barang')
    	->withPivot(['jumlah_pembelian']);
    }
   
}
