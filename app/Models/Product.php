<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;
  protected $table = 'product';
  protected $fillable = [
    'name',
    'description',
    'status',
    'price',
    'compression',
    'type_files',
    'size',
    'dimentions',
  ];
  public function createProduct(
    $name,
    $description,
    $status,
    $price,
    $compression,
    $type_files,
    $size,
    $dimentions
  ){
    return Product::create([
      'name' => $name,
      'description' => $description,
      'status' => $status,
      'price' => $price,
      'compression' => $compression,
      'type_files' => $type_files,
      'size' => $size,
      'dimentions' => $dimentions
    ]);
  }
}
