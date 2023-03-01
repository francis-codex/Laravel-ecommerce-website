<?php

namespace App\Http\Controllers\admin_panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryVerifyRequest;
use App\Http\Requests\CategoryEditVerifyRequest;

use Illuminate\Support\Facades\DB;
use App\Category;
use App\Product;



class categoriesController extends Controller
{
    public function index()
    {
        $result = Category::all();

    	return view('admin_panel.categories.index')
    		->with('catlist', $result);
        
    }
    
    public function posted( CategoryVerifyRequest $request)
    {
        $cat = new Category();
        $cat->name = $request->Name;
        $cat->type = $request->Type;
        $cat->save();
        return redirect()->route('admin.categories');
    }
    
    public function edit($id)
    {
        

        $cat = Category::find($id);
        
        return view('admin_panel.categories.edit')
            ->with('category', $cat);
    }

    public function update(CategoryEditVerifyRequest $request, $id)
    {
      
        $catToUpdate = Category::find($request->id);
        $catToUpdate->name = $request->Name;
        $catToUpdate->type = $request->Type;
        $catToUpdate->save();
        
        return redirect()->route('admin.categories');
    }
    
    public function delete($id)
    {
       
        $cat = Category::find($id);

        return view('admin_panel.categories.delete')
            ->with('category', $cat);
    }

    public function destroy(Request $request)
    {   //Deleting Category related Products
        $prdsToDelete = Product::all()->where('category_id', $request->id);
        
        foreach ($prdsToDelete as $prdToDelete)
        {   
          //deleting image folder
        try{
            $src='uploads/products/'.$prdToDelete->id.'/';
            $dir = opendir($src);
            while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                $full = $src . '/' . $file;
                if ( is_dir($full) ) {
                    rrmdir($full);
                }
                else {
                    unlink($full);
                }
                }
            }
            closedir($dir);
            rmdir($src);
        }
        catch(\Exception $e){

        }
        //deleting image folder done
        $prdToDelete->delete();

        }
        
        
        
        
        
        $catToDelete = Category::find($request->id);
        $catToDelete->delete();

        

        return redirect()->route('admin.categories');
    }
}
