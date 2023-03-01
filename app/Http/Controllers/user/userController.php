<?php
namespace App\Http\Controllers\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\orderRequest;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;
use App\sale;
use App\User;
use App\Address;
use Session;

class userController extends Controller
{
    public function index()
    {
    	$res = Product::all();
        $cat = Category::all();
    	return view('store.index')
            ->with('products', $res)
            ->with("cat", $cat)
            ->with('index', 1);
    }
    public function view($id)
    {
        
        $res = Product::find($id);
        $res1 = Product::all();
        $cat=Category::find($res->category_id);
        $colorList = explode(',',$res->colors);
    	$cat = Category::all();
        return view('store.product')
            ->with('product', $res)
            ->with('products', $res1)
            ->with('cat', $cat)
            ->with('colors',$colorList);   
    }

    public function search(Request $r){
        $category ;
        $name ;
        if($r->query("c")){
            $category = $r->query("c");
        }
        if($r->query("n")){
            $name = $r->query("n");
        }
        $res = Product::all();
        $cat = Category::all();

        if(isset($category) && isset($name)){
            $name = strtolower($name);
            $sRes = DB::select( DB::raw("SELECT * FROM `products` WHERE lower(name) like '%$name%' and category_id = $category" ) );
            //dd("SELECT * FROM `products` WHERE lower(name) like '%$name%' and category_id = $category" );
            //$a = 0;
        }
        else if(isset($name)){
            $name = strtolower($name);
            $sRes = DB::select( DB::raw("SELECT * FROM `products` WHERE lower(name) like '%$name%'" ) );
          //dd("SELECT * FROM `products` WHERE lower(name) like '%$name%'" );
           // $a = 1;
        }
        else if(isset($category)){
            $sRes = DB::table('products')
            ->where("category_id" , $category)
            ->get();
            //$a = 2;
        }
        else{
            $sRes = DB::table('products')
            ->get();
           // $a= 3;
        }

        if(!isset($category)) {
            $category = -1;
        }
        //dd($sRes);
    	return view('store.search')
            ->with('products', $sRes)
            ->with("cat", $cat)
            ->with("a", $category);
    }

    public function post($id,orderRequest $r)
    {
        //dd($r->discount_price_holder);
        
        if(!(Session::has('cart')))
        {
            Session::put('orderCounter',1);
            $c=$id.":".$r->quantity.":".$r->color.":".Session::get('orderCounter');   //the order counter is added after color so that order serial can be obtained
            Session::put('cart',$c);
        }
        else
        {
            Session::put('orderCounter',Session::get('orderCounter')+1);
            $cd=$id.":".$r->quantity.":".$r->color.":".Session::get('orderCounter');
            $total=Session::get('cart').",".$cd;
            Session::put('cart',$total);
        }
        return redirect()->route('user.home');
    }

    public function cart(Request $r)
    {   //Session::forget('cart');
        $res = Product::all();
        $cat = Category::all();
        if(!Session::has('cart'))
        {
            return view('store.cart')->with('all',null)
            ->with('products',[])
            ->with('products', $res)
            ->with("cat", $cat);
        }
        $cart=[];
        $product=[];
        $cost=0;
        $cost_after_quantity=0;
        $totalCart = explode(',',Session::get('cart'));
        //dd(Session::get('cart'));
        foreach($totalCart as $c)
        {
            $cart[]=explode(':',$c);
            $a=explode(':',$c);
            $res = Product::find($a[0]);
            $product[]=$res;
            $cost_after_quantity=$a[1]*$res->discount;
            $cost+= $cost_after_quantity;
            Session::put('price',$cost);
        }

    	return view('store.cart')
            ->with('products', $res)
            ->with("cat", $cat)
            ->with('all',$cart)
            ->with('prod',$product)
            ->with('total',Session::get('price'));
    }
    
//    for quntity control in cart
        public function editCart(Request $r)
    {    
        $newres = Product::all();
        $newcat = Category::all();
        $newcart=[];
        $newproduct=[];
        $newcost=0;
        $newtotalCart = explode(',',Session::get('cart'));
        //dd(Session::get('cart'));
        foreach($newtotalCart as $c)
        {
            $newcart[]=explode(':',$c);
        }
        foreach($newcart as $t)
        {
                if($t[0]==$r->pid && $t[3]==$r->oSerial)
                {
                    
                    $t[1]=$r->newQ;
                }
                if(!(Session::has('tempCart')))
                {

                    $str=$t[0].":".$t[1].":".$t[2].":".$t[3];
                    Session::put('tempCart',$str);
                }
                else
                {
                    $str2=$t[0].":".$t[1].":".$t[2].":".$t[3];
                    $mytotal=Session::get('tempCart').",".$str2;
                    Session::put('tempCart',$mytotal);
                }
                
        }
            Session::forget('cart');
            Session::put('cart',Session::get('tempCart'));
            Session::forget('tempCart');
            
            //for price update
            $res = Product::all();
            $cat = Category::all();
            $cart=[];
            $product=[];
            $cost=0;
            $cost_after_quantity=0;
            Session::forget('price');
            $totalCart = explode(',',Session::get('cart'));
            //dd(Session::get('cart'));
            foreach($totalCart as $c)
            {
                $cart[]=explode(':',$c);
                $a=explode(':',$c);
                $res = Product::find($a[0]);
                $product[]=$res;
                $cost_after_quantity=$a[1]*$res->discount;
                $cost+= $cost_after_quantity;
                Session::put('price',$cost);
               
            }
            //dd(Session::get('price'));
            //end 
            //dd($myarr);
            $szn[0]=Session::get('cart');
            $szn[1]=Session::get('price');
            $szn[2]=$cost;
            

            return json_encode($szn);
            exit;    
            
             
    }
//    for quntity control in cart ENDS
    
    public function deleteCartItem(Request $r)
    {
        
        
        $counter=0;
        $newtotalCart = explode(',',Session::get('cart'));
        //dd(Session::get('cart'));
        foreach($newtotalCart as $c)
        {
            $newcart[]=explode(':',$c);
        }
        foreach($newcart as $t)
        {   
                if($t[3]==$r->serial)
                {
                    $another_counter=$counter;
                }
                $counter++;
        } 
        array_splice($newtotalCart, $another_counter, 1);
        
        //testing Starts
        //dd(Session::get('tempCart'));
         foreach($newtotalCart as $c2)
        {
             
            $newcart2[]=explode(':',$c2);
        }
        
        if($newtotalCart==null)
        {
            Session::forget('cart');
            Session::forget('price');
            Session::forget('orderCounter');
            return json_encode("Empty");
            exit;     
            
        }
        
        else
        {
            foreach($newcart2 as $t2)
        {
               
                if(!(Session::has('tempCart')))
                {

                    $str2=$t2[0].":".$t2[1].":".$t2[2].":".$t2[3];
                    Session::put('tempCart',$str2);
                   

                }
                else
                {
                    $str2=$t2[0].":".$t2[1].":".$t2[2].":".$t2[3];
                    $mytotal2=Session::get('tempCart').",".$str2;
                    Session::put('tempCart',$mytotal2);
                }
                
        }
            
            Session::forget('cart');
            Session::put('cart',Session::get('tempCart'));
            Session::forget('tempCart');
            
            //for price update
            $res = Product::all();
            $cat = Category::all();
            $cart=[];
            $product=[];
            $cost=0;
            $cost_after_quantity=0;
            Session::forget('price');
            $totalCart = explode(',',Session::get('cart'));
            //dd(Session::get('cart'));
            foreach($totalCart as $c)
            {
                $cart[]=explode(':',$c);
                $a=explode(':',$c);
                $res = Product::find($a[0]);
                $product[]=$res;
                $cost_after_quantity=$a[1]*$res->discount;
                $cost+= $cost_after_quantity;
                Session::put('price',$cost);
               
            }
            $szn[0]=Session::get('cart');
            $szn[1]=Session::get('price');
            $szn[2]=$cost;
            $szn[3]=$r->serial;
            return json_encode($szn);
            exit; 
        }
            
        
        
        
        
        //testing ends
    }
    
    
    public function confirm(Request $r)
    {  
        if($r->has('order'))
        {
            if(Session::has('user'))
            {
                
                $sales= new sale();
                $sales->user_id=session('user')->id;
                $sales->product_id=session('cart');
                $sales->order_status='Placed';
                $sales->price=session('price');
               
                $sales->save();
           // dd(1);
            Session::forget('cart');
            Session::forget('price');
            Session::forget('orderCounter');
            //dd( $r->session());
            return redirect()->route('user.cart');
            }
            else{
                return redirect()->route('user.cart');
            }
            
        }

        if($r->has('signup'))
        { 
            $validatedData = $r->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'address' => 'required',
            'city' => 'required',
            'zip' => 'required|numeric',
            'tel' => 'required|numeric',
            'pass' => 'required|min:5'
            ]);
            //dd($validatedData);
            $u=new User();
            $add=new Address();
            $add->area=$r->address;
            $add->city=$r->city;
            $add->zip=$r->zip;
            $add->save();
            $add_id=$add->id;
            $u->full_name=$r->name;
            $u->email=$r->email;
            $u->password=$r->pass;
            $u->address_id=$add_id;
            $u->phone=$r->tel;
            //dd($u);
            $u->save();
            $user=User::find($u->id);
            Session::put('user',$user);
            return redirect()->route('user.cart');
        }
       
    }
    public function history(Request $r)
    {
        $res1= sale::where('user_id', session('user')->id)->get();
        if(!$res1)
        {
            return view('user.orderHistory')->with('all',[])
                 ->with('products',[])
                 ->with('sale',[]);
        }
        
        $cart=[];
        $product=[];
        $id=[];
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
        $res = Product::all();
        $cat = Category::all();
          //dd($cart); 
         return view('store.history')
         ->with('products', $res)
         ->with("cat", $cat)
         ->with('all',$cart)
         ->with('prods',$product)
         ->with('sale',$res1);
    }
    
}
