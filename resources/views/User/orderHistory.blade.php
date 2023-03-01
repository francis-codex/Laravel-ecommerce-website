@foreach($sale as $s)

	<h1>Order ID: {{$s->id}}</h1>

	@foreach($all as $c)
		@if($c[0]==$s->id)
		    @foreach($products as $p)
		    	@if($c[1]==$p->id)
					<img src="/uploads/products/{{$p->id}}/{{$p->image_name}}" height="50px" width="50px">
					{{$p->name}}
					@break
		    	@endif
			@endforeach

			Ordered Size: {{$c[3]}}
			
			Ordered Color: <div style="height:25px;width:25px;margin:5px;display:inline-block;background-color: {{$c[4]}}"></div>
			
			
			 <br/>
		 @endif
	@endforeach
	<h3>Order Status: {{$s->order_status}}</h3>
@endforeach 