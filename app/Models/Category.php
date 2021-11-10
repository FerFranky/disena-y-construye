<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use HasFactory;
  protected $table = 'categories';
  protected $fillable = [
    'name',
    'description',
    'status',
    'type'
  ];
  public function createCategory(
    $name,
    $description,
    $status,
    $type
  ){
    return Category::create([
      'name' => $name,
      'description' => $description,
      'status' => $status,
      'type' => $type
    ]);
  }
  }
