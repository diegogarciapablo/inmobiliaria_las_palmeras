<?php

namespace palmeras;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
	protected $fillable = ['nombre','apellido','telefono','direccion','slug','foto'];
    /**
 * Get the route key for the model.
 *
 * @return string
 */
    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
