<?php

namespace App\Http\Controllers\Api;

use App\Product;
use App\ProductRating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::where('is_deleted',false)->orderBy('created_at','desc')->get();
        return response()->json($products,200);
    }

    public function sort(string $type,string $sort)
    {
        $products = Product::where('is_deleted',false)->orderBy($type,$sort)->get();

        return response()->json($products,200);
    }

    public function allratings($id)
    {
        $ratings = ProductRating::join('users',"user_id","=","users.id")
            ->where('product_id',$id)
            ->select('users.name','rating','description','product_ratings.created_at','is_buy')
            ->orderby('product_ratings.created_at','desc')
            ->get();

        return response()->json($ratings,200);
    }

    public function  categories($id)
    {
        $products = Product::where('category_id',$id)->get();
        return response()->json($products,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::find($id);
        if($product === null)
        {
            abort(404);
        }

        return response()->json($product,200);
        //return json_encode($product, JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
