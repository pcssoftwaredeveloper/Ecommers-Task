<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_model;
use App\Models\TotalGetProduct;
class Crud_functionality extends Controller
{
   
    
    public function add_edit_product($id=""){
        $data = TotalGetProduct::find($id);
        $product = json_decode($data);       
        return view('add-edit-product')->with(compact('product'));        
    }

    public function product_list(){
        $data = TotalGetProduct::where('status','!=',5)->get();
        $products = json_decode($data);
        return view('product-list')->with(compact('products'));
    }

    public function register_api(request $request){
        // if(!empty($request->old_img)){ $image = $request->file('old_img')->store('public/uploads'); }
        //     if(!empty($request->file)){ $image = $request->file('file')->store('public/uploads'); }
        if($request->id){
            
            $img_name = $request->old_img;
            if($request->image)
            {               
               
               $image = $request->image;
                $img_name = $image->getClientOriginalName();
                $image->storeAs('public/images',$img_name);
            }

            $data = TotalGetProduct::find($request->id);
            $data->name = $request->name;
            $data->quantity = $request->qty;
            $data->image = $img_name;
            $data->description = $request->description;
            $data->status = $request->status;
            $response = $data->save();
            if($response){
             $data = json_encode(['error'=>true,'message'=>'Product Updated Successfully']);
                return redirect('/product_list');
            }else{
                echo json_encode(['error'=>false,'message'=>'Some thing is wrong']);
                return redirect('/update/'.$request->id);
            }

        }else{
            $table   = new user_model;
            $image = $request->image;
            $img_name = $image->getClientOriginalName();
            $image->storeAs('public/images',$img_name);
            $table->name = $request->name;
            $table->quantity = $request->qty;
            $table->image = $img_name;
            $table->description = $request->description;
            $table->status = $request->status;
            $response = $table->save();
            if($response){
             $data = json_encode(['error'=>true,'message'=>'Product added successfully']);
                return redirect('/product_list');
            }else{
                echo json_encode(['error'=>false,'message'=>'Some thing is wrong']);
                return redirect()->route('register_api');
            }
        }
        
        return redirect()->route('product-save');
    }

    public function delete(request $request){
        $data = TotalGetProduct::find($request->id);
        $data->status = 5;
        $response = $data->save();
        return redirect('/product_list');
    }
}
