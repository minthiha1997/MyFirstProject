<?php

namespace App\Http\Controllers;
use App\{Category,Brand,Product,Subcategory};
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
 public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $products=Product::paginate(5);
        return view('Product.index',compact('products'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $categories=Category::all();
     $subcategories=Subcategory::all();
     $brands=Brand::all();
       //dd($categories);
     return view('product.create',compact('categories','subcategories','brands'));
 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new Product($request->all());
        $product->create($product->getAttributes());
        return redirect('product');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $product=Product::find($id);
       $categories=Category::all();
       $subcategories=Subcategory::all();
       $brands=Brand::all();

       return view('product.edit',compact('product','categories','subcategories','brands'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=new Product($request->all());
         $product_u=Product::find($id);
        $product_u->update($product->getAttributes());
        return redirect('product');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $product=Product::find($id);
        $product->delete();
        return redirect('product');
    }
}
