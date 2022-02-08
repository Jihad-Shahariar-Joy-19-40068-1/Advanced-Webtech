<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Models\Product;

class ProductsController extends Controller
{
    //
    public function productCRUD(){
        return view('product.productCRUD');
    }

    public function productsubmit(Request $req){
    
        $this->validate($req,[
                'pname'=>'required|min:3|max:25|regex:/^[A-Z a-z]+$/',
                'price'=>'required|regex:/^[0-9]+$/',
                'qty'=>'required|regex:/^[0-9]+$/',
                'des'=>'required|regex:/^[A-Z a-z]+$/'
            ],
            [
                'pname.required'=>'Please provide a Product Name',
                'pname.min'=>'Name Should be at least 3 characters',
                'pname.max'=>'Name Should not contain more than 25 characters',
                'pname.regex'=>'Text (A-z) only',
                'price.required'=>'Please provide a Price',
                'price.regex'=>'Numbers only',
                'qty.required'=>'Please provide a Quantity',
                'qty.regex'=>'Numbers only',
                'des.required'=>'Please provide a Description of the product',
                'des.regex'=>'Text (A-z) only'
            ]
        );
            //end of validation
            $pd = new Product();
            $pd->pname = $req->pname;
            $pd->price = $req->price;
            $pd->qty = $req->qty;
            $pd->des = $req->des;
            $pd->save();
    
            return "Submitted with $req->pname and $req->price";
        }
}
