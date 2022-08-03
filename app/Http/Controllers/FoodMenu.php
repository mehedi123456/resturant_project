<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\FoodOrder;

class FoodMenu extends Controller
{

    public function welcome()
    {
        // dd("lists");
        $data['lists'] = Food::all();
       
        return view('welcome', $data);
       
    }

    public function foodView()
    {
        return view('food.foodView');
    }


    public function foodmenu()
    {
        $lists = Food::all();
        return view('food.foodmenu',compact('lists'));
    }


    public function addfood(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'image' => 'required',
            'description' => 'required',
            
        ]);

        $data =new food;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();
        return redirect()->back();
    }

    public function deletefood($id)
    {
         Food::findOrFail($id)->delete();
        
        return back();
    }


   public function order($food_id)
   {
    $data['list'] = Food::findOrFail($food_id);
    return view('food.order', $data);
    
   }

   public function details(Request $request)
   {

    $request->validate([
        'title'    => 'required',
        'price'    => 'required',
        'name'     => 'required',
        'number'   => 'required',
        'quantity' => 'required',
        'address'  => 'required',
        
    ]);
    FoodOrder::insert([
        'title'=>$request->title,
        'price'=>$request->price,
        'name'=>$request->name,
        'number'=>$request->number,
        'quantity'=>$request->quantity,
        'address'=>$request->address,
    ]);

    return back();
   }

   public function orderList()
   {
    $lists = FoodOrder::all();
    return view('food.orderList',compact('lists'));
   }

   public function orderDelivered($order_id)
   {
       FoodOrder::findOrFail($order_id)->delete();
        
        return back();
   }
    

   




}
