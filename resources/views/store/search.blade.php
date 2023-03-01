@extends('store.storeLayout')
@section('content')
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- STORE -->
            <div id="store" class="col-md-12">
                <!-- store products -->
                <div class="row">
                    @foreach($products as $product)
                    <!-- product -->
                    <div class="col-md-4 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <img src="uploads/products/{{$product->id}}/{{$product->image_name}}" alt="">
                                <div class="product-label">
                                    <span class="sale">offer</span>
                                    <span class="new">{{$product->tag}}</span>
                                </div>
                            </div>
                            <div class="product-body">
                                <h3 class="product-name"><a href="product/{{$product->id}}">{{$product->name}}</a></h3>
                                <h4 class="product-price">TK {{$product->discount}} <del class="product-old-price">TK {{$product->price}}</del></h4>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                
                            </div>
                            <div class="add-to-cart">
                                <a class="add-to-cart-btn" href="{{route('user.view',['id'=>$product->id])}}"><i class="fa fa-shopping-cart"></i>Purchase</a>
                            </div>
                        </div>
                    </div>
                    <!-- /product -->
                    @endforeach
                </div>
                <!-- /STORE -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

    @endsection
