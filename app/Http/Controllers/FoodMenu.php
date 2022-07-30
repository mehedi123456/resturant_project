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

//    public function orderfood(Request $request, $id)
//    {
//     $foodid=$id;
//     $quantity = $request->quantity;

//     $OrderFood = new FoodOrder;
//     $OrderFood -> food_id=$foodid;
//     $OrderFood -> quantity=$quantity;
//     $OrderFood ->save();

//     return redirect()->back();
//    }

   public function order($id)
   {
    $lists = Food::findOrFail($id);
    return view('food.order',compact('lists'));
   }
    

   




}
