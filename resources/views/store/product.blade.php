@extends('store.storeLayout')
@section('content')
<script src="{{asset('js/lib/jquery.js')}}"></script>
<script src="{{asset('js/dist/jquery.validate.js')}}"></script>
 <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<link type="text/css" rel="stylesheet" href="{{asset('css/style_for_quantity.css')}}" />

<style>
label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}


</style>

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-5 ">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="../uploads/products/{{$product->id}}/{{$product->image_name}}" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product main img -->


            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">{{$product->name}}</h2>
                    <div>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="product-price">TK {{$product->discount}} <del class="product-old-price">TK {{$product->price}}</del></h3>
                        <span class="product-available">In Stock</span>
                    </div>
                    <p>{!!$product->description!!}</p>
                    <form method="post" id="order_form">
                    {{csrf_field()}}
                    <div class="product-options" >
                        <input type="hidden" id="discount_price_holder" name="discount_price_holder" value={{$product->discount}}>
                        <label>
                        
                        <div id="field1">Quantity
                        <button type="button" id="sub" class="sub">-</button>
                        <input type="number" id="quantity" name="quantity" value="1" min="1" max="100"  />
                        <button type="button" id="add" class="add">+</button>
                    </div>
                        
                        </label>
                        
                        
                        @foreach($colors as $c)
                        <input type="radio" name="color"  value="{{$c}}">
                        <div style="height:25px;width:25px;margin:5px;display:inline-block;background-color: {{$c}}"></div>
                        @endforeach
                          
                    </div>
                        <div id="for_error"></div>

                    <div class="add-to-cart">
                        <button type="submit" name="myButton" id="myButton" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                    </div>
                    </form>
                    <ul class="product-links">
                        <li>Category:</li>
                        <li><a href="{{route('user.search')}}?c={{$product->category->id}}">{{$product->category->name}}</a></li>
                    </ul>
                </div>
            </div>
            <!-- /Product details -->

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<div style="height:200px"></div>

<!--JQUERY Validation-->
<script>
	
    //////////////////////////////////////
    $(document).ready(function() {
		
		$("#order_form").validate({
			
            submitHandler: function (form) {
            if($('input[name=color]:checked').val()==undefined)
            {
                
            document.getElementById("for_error").innerHTML = "<label class='error' style=' '>Invalid Variation Input</label>";

            }
                else
                    {
                        return true;
                    }
                
         }
		});

		
	});
	
    $('.add').click(function () {
        
        $(this).prev().val(+$(this).prev().val() + 1);
        
    });
    $('.sub').click(function () {
            if ($(this).next().val() > 1) {
            $(this).next().val(+$(this).next().val() - 1);
            }
    });
    
	
   
	</script>
<!--/JQUERY Validation-->
<!-- /SECTION -->
@endsection
