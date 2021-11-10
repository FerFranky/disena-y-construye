<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class ProductController extends Controller
{
  public function index(){
    $categories = Category::where('status','Activo')->get();
    // return 'xD';
    return view('admin.Product.index', compact(
      'categories'
    ));
  }
  public function store(Request $request){
    // return $request;
    DB::beginTransaction();
    try {
      Category::createCategory(
        $name = $request->name,
        $description = $request->description,
        $status = 'Activo',
        $type = $request->type
      );
      DB::commit();
      return back()->with('success','Categoria agregada correctamente');
    } catch (\Exception $e) {
      DB::rollback();
      return $e->getMessage();
    }

  }
}
