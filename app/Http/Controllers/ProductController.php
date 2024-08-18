<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller {

public function list() {
    $products = DB::table('products')->get();
    return view('product.list', compact('products'));
}

public function create() {
    return view('product.create');
}

public function store(Request $request) {
    DB::table('products')->insert([
        'product_name' => $request->product_name,
        'description' => $request->description,
        'product_price' => $request->product_price,
        'quantity' => $request->quantity,
]);

return redirect()->route('product.list');
}

public function edit($s_no) {
    $product = DB::table('products')->where('s_no', $s_no)->first();
    return view('product.edit', compact('product'));
}
public function update(Request $request, $s_no) {
    DB::table('products')
    ->where('s_no', $s_no)
    ->update([
    'product_name' => $request->product_name,
    'description' => $request->description,
    'product_price' => $request->product_price,
    'quantity' => $request->quantity
]);
    return redirect()->route('product.list');
}

public function destroy($s_no){
    DB::table('products')->where('s_no', $s_no)->delete();
    return redirect()->route('product.list');
}
}