<?php

namespace App\Http\Controllers;
use App\{Category,Subcategory};
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{ public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $subcategories=Subcategory::paginate(5);
       // dd($subcategories);
        return view('subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('subcategory.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $subcategory=new Subcategory($request->all());
        $subcategory->create($subcategory->getAttributes());
        return redirect('subcategory');

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory=Subcategory::find($id);
        $categories=Category::all();
        return view('subcategory.edit',compact('subcategory','categories'));
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
        $subcategory=new Subcategory($request->all());
        $subcategory_u=Subcategory::find($id);
        $subcategory_u->update($subcategory->getAttributes());
        return redirect('subcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory=Subcategory::find($id);
        $subcategory->delete();
        return redirect('subcategory');
    }
}
