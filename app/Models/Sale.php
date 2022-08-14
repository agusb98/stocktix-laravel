<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 *
 * @property $id
 * @property $product_id
 * @property $client_id
 * @property $debt
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sale extends Model
{
    
    static $rules = [
		'product_id' => 'required',
		'client_id' => 'required',
		'debt' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id','client_id','debt','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Client', 'id', 'client_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Product', 'id', 'product_id');
    }
}
