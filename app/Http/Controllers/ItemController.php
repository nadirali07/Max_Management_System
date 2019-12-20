<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use App\Item;
use Redirect;
use PDF;
use DataTables;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['items'] = Item::orderBy('item_id','desc')->paginate(10);
        return view('admin.items',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//     public function store(Request $request)
//     {
//         $request->validate([
//             'item_name' => 'required',
//             'item_qty' => 'required',
//             'item_price' => 'required',
//             'item_img' => 'nullable',
//         ]);
//         $item = new Item;
//         $item->item_name = $request->input('item_name');
//         $item->item_qty = $request->input('item_qty');
//         $item->item_price = $request->input('item_price');
//         if ($request->hasfile('item_img')) {
//          $file=$request->file('item_img');
//          $extension=$file->getClientOriginalName();
//          $filename=time(). "." . $extension;
//          $file->move(public_path()."/images",$filename);
//          $item->item_img=$filename;
//      }
//      else
//      {
//         return $request;
//         $item->item_img="";
//     }
//     $item->save();
//     return Redirect::to('items')->with('success','Greate! Product Added successfully.');
// }
    public function store(Request $request)
    {
        if ($request->hasfile('item_img')) {
         $file=$request->file('item_img');
         $extension=$file->getClientOriginalName();
         $filename=rand(). "." . $extension;
         $file->move(public_path()."/images",$filename);
     }
     else
     {
        $filename="";
        return $request;
        
    }
        Item::updateOrCreate(['item_id' => $request->item_id],
                ['item_name' => $request->item_name, 'item_qty' => $request->item_qty, 'item_price' => $request->item_price, 'item_img' => $filename]);

        return response()->json(['success'=>'Item saved successfully.']);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $item_id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($item_id)
    {
        Item::where('item_id',$item_id)->delete();
        return Redirect::to('items')->with('success','Product deleted successfully');
    }
}
