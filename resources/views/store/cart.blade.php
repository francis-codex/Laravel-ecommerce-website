@extends('store.storeLayout')
@section('content')
<script src="{{asset('js/lib/jquery.js')}}"></script>
<script src="{{asset('js/dist/jquery.validate.js')}}"></script>

<link type="text/css" rel="stylesheet" href="{{asset('css/style_for_quantity.css')}}" />
<style>
label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}

    .rTable {
        
    display: block;
    width:100%;
    
}
.rTableHeading, .rTableBody, .rTableFoot, .rTableRow{
    clear: both;
}
.rTableHead, .rTableFoot{
    background-color: #DDD;
    font-weight: bold;
}
.rTableCell, .rTableHead {
    
    float: left;
    overflow: hidden;
    padding: 3px 1.8%;
    width:20%;
    
}
.rTable:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0;
}

</style>             

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        

            <!-- Order Details -->
            <div class="col-md-5 order-details" style="width: 100%;">
                <div class="section-title text-center">
                    <h3 class="title">Your Order</h3>
                </div>
                <div id="order_summary" class="order-summary">
                   
                   
                   
                    @if($all != null)
                    <div class="rTable">
                        <div class="rTableRow">
                            <div class="rTableHead"><strong>REMOVE</strong></div>
                            <div class="rTableHead"><strong>PRODUCT</strong></div>
                            <div class="rTableHead"><strong>QUANTITY</strong></div>
                            <div class="rTableHead"><strong>COLOR</strong></div>
                            <div class="rTableHead"><strong>PRICE</strong></div>

                        </div>
					@foreach($all as $c)
					@foreach($prod as $p)
					@if($c[0]==$p->id)
                        <div  class="rTableRow" id="deleteItem_{{$c[3]}}">
                         
                          <div class="rTableCell">  <button type="button" id="delete_item"  value={{$c[3]}} name="delete_item"  class="delete_item">X</button></div>
							<div class="rTableCell"><img src="uploads/products/{{$p->id}}/{{$p->image_name}}" height="50px" width="50px"> {{$p->name}}</div>
                            
                            <!--quantity-->
                                                                <!--c[1] is pid and c[3] is order serial-->
                            <div class="rTableCell">
                           <button type="button" id="sub" value={{$p->id}} data-rel={{$c[3]}} data-rel2={{$p->discount}} class="sub">-</button>   
                        <input type="number"  id="quantity" style="width:15%" name={{$p->id}} value={{$c[1]}} min="1" max="100" readonly/>
                        <button type="button" id="add" value={{$p->id}} data-rel={{$c[3]}} data-rel2={{$p->discount}}  class="add">+</button></div>
                            
<!--                            -->
							<div class="rTableCell"><div style="height:25px;width:25px;display:inline-block;background-color: {{$c[2]}}"></div></div>
							
							<div class="rTableCell"><div id="individualPrice_{{$c[3]}}">
                                @php
                                $tot =$p->discount* $c[1];
                                echo $tot;
                                @endphp
                                
                                TK</div></div>
                                
						</div>
                        
						@break
					@endif
					@endforeach 
					@endforeach 
                    
                    </div>
                    <div class="order-col">
                        <div>Shiping</div>
                        <div><strong>FREE</strong></div>
                    </div>
                    <div class="order-col">
                        <div><strong>TOTAL</strong></div>
                        <div ><strong class="order-total" id="totalCost">{{Session::get('price')}} TK</strong></div>
                    </div>
                    @else
                    <div class="order-col">
                        <h1>Your Cart is Empty</h1>
                    </div>
                    @endif
                    
                </div>
                <div class="payment-method">
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-2" checked>
                        <label for="payment-2">
                            <span></span>
                            Cash On Delivery
                        </label>
                        <div class="caption">
                            <p>The product Will be delivered within 24 hour of confirmation. We accept only Cash on delivery at this moment.</p>
                        </div>
                    </div>
                </div>
                @if(session('user'))
                    @if($all != null)
                   <center> <form method="post" name="cart">
                        {{csrf_field()}}
                        <input type="submit" id="confirm_order"  name="order" class="primary-btn order-submit" value="Confirm order">
                    </form></center>

                    @else
                        <a href="{{route('user.home')}}"><input type="button"  class="primary-btn order-submit" value="Order Now"></a>
                    @endif
                
                @else
                 @if(!session('user'))
        <div class="row">
        <form method="post" id="signupForm">
            {{csrf_field()}}
            <div class="col-md-7">
                <!-- Billing Details -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Billing address</h3>
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" id="name" name="name" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <input class="input" type="email" name="email" id="email" placeholder="Email" onkeyup="myFunction()">
                    </div>
                    <div id="for_duplicate-email"></div>
                    <div class="form-group">
                        <input class="input" type="text" name="address" id="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="city" id="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="zip" id="zip" placeholder="ZIP Code">
                    </div>
                    <div class="form-group">
                        <input class="input" type="tel" name="tel" id="tel" placeholder="Telephone">
                    </div>
                    <div class="form-group">
                        <input class="input" type="password" name="pass" id="pass" placeholder="Enter Your Password">
                    </div>
                    <div class="form-group">
                        <input class="input" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                    </div>
                    
                        
                        <input type="submit"  name="signup" class="primary-btn order-submit" value="Sign Up">
               
                    </div>
                <!-- /Billing Details -->
            </div></form>
               </div>      
                
            @endif  
                    
                @endif
                

                
           
            <!-- /Order Details -->
        
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<script>
    
   //TO DO: ajax will take place
    
    $('.add').click(function () {

    var url="{{route('user.editCart')}}";
    var product_id= $(this).val(); 
    $(this).prev().val(+$(this).prev().val() + 1);
    var x=$(this).prev().val(); 
    var token=$("input[name=_token]").val();
    var order_serial=this.getAttribute('data-rel');
    var product_price=this.getAttribute('data-rel2');


    $.ajax({
            type:'post',
            url:url,
            dataType: "JSON",
            async: false,
            data:{pid: product_id, newQ:x, oSerial:order_serial, _token: token},
            success:function(msg)
            {
                document.getElementById("individualPrice_"+order_serial).innerHTML=x*product_price+" TK";
                document.getElementById("totalCost").innerHTML = msg[2]+" TK";
            }
            });
        
   
    });
    $('.sub').click(function () {
        
        var url="{{route('user.editCart')}}";
        var product_id= $(this).val();
        var order_serial=this.getAttribute('data-rel');
        var product_price=this.getAttribute('data-rel2');
        if ($(this).next().val() > 1) 
        {
            $(this).next().val(+$(this).next().val() - 1);
            var x=$(this).next().val();
            var token=$("input[name=_token]").val();
            
            
            $.ajax({
            type:'post',
            url:url,
            dataType: "JSON",
            async: false,
            data:{pid: product_id, newQ:x, oSerial:order_serial, _token: token},
            success:function(msg)
            {
                document.getElementById("individualPrice_"+order_serial).innerHTML=x*product_price+" TK";
                document.getElementById("totalCost").innerHTML = msg[2]+" TK";

            }
            });
            
        
        }
    });
    
    $('.delete_item').click(function () {
        var url="{{route('user.deleteCartItem')}}";
        var serial= $(this).val();   //serial is the forth element of sale coloumn
        var token=$("input[name=_token]").val();
        var id_holder="deleteItem_"+serial;
        $.ajax({
                type:'post',
                url:url,
                dataType: "JSON",
                async: false,
                data:{serial:serial, _token: token},
                success:function(msg)
                {
                    if(msg=="Empty")
                        {
                        document.getElementById("order_summary").innerHTML = "<div class='order-col'><h1>Your Cart is Empty</h1></div>";
                        document.getElementById("confirm_order").style.visibility = "hidden";
                        }
                   
                    //$("#deleteItem_".$p->id").load(location.href+" #refresh_div","");
                    document.getElementById(id_holder).innerHTML  = "";
                    document.getElementById("totalCost").innerHTML = msg[2];
                }
                });


    });
	
    
    //validation
    
    $(document).ready(function() {
		// validate the comment form when it is submitted
		//$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				name: "required",
				email: {
					required: true,
					email: true
				},
                address: "required",
                city: "required",
                zip: {
					required: true,
					number: true
				},
                tel: "required",
				pass: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#pass"
				}
				
				
				
			},
			messages: {
				name: "Please enter your Fullname",
				email: "Please enter a valid email address",
                address: "Please enter your Address",
                city: "Please enter your City",
                address: "Please enter your Address",
				zip: {
					required: "Please enter Zipcode",
					number: "Invalid Zipcode"
				},
                tel: "Please enter your Phone number",
				pass: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				}
				
				
			}
            
            
        
		});

		
	});
   
</script>
<script>
function myFunction() {
    //var token={{ csrf_token() }};
    var email=$("#email").val();
    var token=$("input[name=_token]").val();
    var url="{{route('user.signup.check_email')}}";
    

            $.ajax({
                type:'post',
                url:url,
                dataType: "JSON",
                async: false,
                data:{email: email, _token: token},
                success:function(msg){
                        
                         
                        if(msg == "1")
                            {
                                document.getElementById("for_duplicate-email").innerHTML = "<label class='error'>This Email Address is Already taken</label>";
                                                    

                            }
                    else
                        {
                            document.getElementById("for_duplicate-email").innerHTML = "";

                        }
                    }
             });
    
}
</script>
@endsection
