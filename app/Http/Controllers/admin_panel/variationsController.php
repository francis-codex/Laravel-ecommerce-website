<?php

namespace App\Http\Controllers\admin_panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\VariationVerifyRequest;


use Illuminate\Support\Facades\DB;
use App\Product;
use App\Color_size_variation;


class variationsController extends Controller
{
    public function index($id)
    {
        $result = Color_size_variation::all()
                            ->where('product_id',$id);

    	
    	$which_product = Product::find($id);	
            	return view('admin_panel.variations.index')
                    ->with('variationslist', $result)
                    ->with('which_product', $which_product);


        
    }
    
    public function posted(VariationVerifyRequest $request,$id)
    {
        $variation = new Color_size_variation();
        $variation->color = $request->Color;
        $variation->size = $request->Size;
        $variation->stock = $request->Stock;
        $variation->product_id = $request->Product_id;

        $variation->save();
        return redirect()->route('admin.products.variations', ['id' => $request->Product_id]);
    }
    
    public function edit($vid)
    {
        
    		

        $variation = Color_size_variation::find($vid);
        
        return view('admin_panel.variations.edit')
            ->with('variation', $variation);
    }

    public function update(VariationVerifyRequest $request, $vid)
    {
      
        $variationToUpdate = Color_size_variation::find($vid);
        $variationToUpdate->color = $request->Color;
        $variationToUpdate->size = $request->Size;
        $variationToUpdate->stock = $request->Stock;
        
        $variationToUpdate->save();
        
        return redirect()->route('admin.products.variations', ['id' => $request->Product_id]);
    }
    
    
}
