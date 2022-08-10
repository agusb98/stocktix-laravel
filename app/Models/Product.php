<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $code
 * @property $name
 * @property $price
 * @property $description
 * @property $quantity
 * @property $status
 * @property $observation
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{

  static $rules = [
    'code' => 'required|string|max:100',
    'name' => 'required|string|max:100',
    'price' => 'required|int',
    'quantity' => 'required|int',
    'status' => 'required|int',
    'observation' => 'max:200',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['code', 'name', 'price', 'description', 'quantity', 'status', 'observation'];
}
