<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
	protected $table = 'vehiculos';
	protected $primaryKey = 'serie';
	protected $fillable = array('color','cilindrada','potencia','peso','fabricante_id');
	protected $hidden = ['created_at','updated_at'];

	public function fabricantes()
	{
		return $this->belongsTo('App\Fabricante');
	}
}