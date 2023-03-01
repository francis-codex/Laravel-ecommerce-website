<?php

namespace App\Http\Controllers\admin_panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;
use App\sale;
use App\User;
use App\Address;
class managementController extends Controller
{
    public function manage()
    {
    	$res1= sale::all();
        if(!$res1)
        {
			return view('admin_panel.dashboard.orderManagement')->with('all',[])
	         ->with('products',[])
	         ->with('sale',[]);
        }
        
        $cart=[];
        $product=[];
        $users=[];
        foreach($res1 as $r )
        {

           // echo "select * from users inner join addresses on users.address_id = addresses.id where users.id = $r->user_id" .'<br>';
            $users[] = DB::select( DB::raw("select users.id as id , users.full_name as full_name , addresses.area as area , addresses.city as city , addresses.zip as zip from users inner join addresses on users.address_id = addresses.id where users.id = $r->user_id" ) )[0];
             //$users[]=User::find($r->user_id)->with('addresses')->get();
             $totalCart = explode(',',$r->product_id);
             foreach($totalCart as $c)
             {
                $cart[]=array_prepend(explode(':',$c), $r->id);
                $a=explode(':',$c);
                $res = Product::find($a[0]);
                $product[]=$res;
             }
        }
        //dd($users);
        //dd($users[0]->area);
        
         return view('admin_panel.orders.index')->with('all',$cart)
         ->with('products',$product)
         ->with('sale',$res1)
         ->with('users',$users)
         ->with('status',['Placed','On Process','Delivered','Cancel']);

    }
    public function update(Request $r)
    {
    	$n=sale::find($r->orderId);

    	if($n)
    	{
    		$n->order_status=$r->stat;
    		$n->save();
    	}

    	


    	$res1= sale::all();
        if(!$res1)
        {
			return view('admin_panel.dashboard.orderManagement')->with('all',[])
	         ->with('products',[])
	         ->with('sale',[]);
        }
        
        $cart=[];
        $product=[];
        foreach($res1 as $r )
        {
             $totalCart = explode(',',$r->product_id);
             foreach($totalCart as $c)
             {
                 $cart[]=array_prepend(explode(':',$c), $r->id);
                $a=explode(':',$c);
                $res = Product::find($a[0]);
                $product[]=$res;
             }
        }
         return redirect()->route('admin.orderManagement');

    }
}
