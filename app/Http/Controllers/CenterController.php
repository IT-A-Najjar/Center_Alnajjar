<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CenterController extends Controller
{

//    private static function getData(){
//        return[
//            ['id'=>1,'type'=>'shoes','price'=>10],
//            ['id'=>2,'type'=>'bag','price'=>20],
//            ['id'=>3,'type'=>'shoes','price'=>15],
//            ['id'=>4,'type'=>'shoes','price'=>15],
//            ['id'=>5,'type'=>'shoes','price'=>15]
//        ];
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('female',[
            'data'=>Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'female-name'=>'required',
            'female-price'=>['required','integer']
        ]);

        $product = new Product();
        $product->name= strip_tags($request->input('female-name'));
        $product->type= strip_tags($request->input('female-type'));
        $product->description= strip_tags($request->input('female-description'));
        $product->price= strip_tags($request->input('female-price'));

//        $product->img= strip_tags($request->input('female-img'));
        $product->save();

        return redirect()->route('female.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $index=Product::findorFail($id);
        return view('show',[
            'data'=>$index
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit',[
           'data'=>Product::findorFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id_edit)
    {
        $request->validate([
            'female-name'=>'required',
            'female-price'=>['required','integer']
        ]);
        $to_update = Product::findorFail($id_edit);
        $to_update->name= strip_tags($request->input('female-name'));
        $to_update->type= strip_tags($request->input('female-type'));
        $to_update->description= strip_tags($request->input('female-description'));
        $to_update->price= strip_tags($request->input('female-price'));
//        $to_update->img= strip_tags($request->input('female-img'));
        $to_update->save();
        return redirect()->route('female.show',$id_edit);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_delete)
    {
        $to_delete=Product::findorFail($id_delete);
        $to_delete->delete();
        return redirect()->route('female.index');
    }
}
