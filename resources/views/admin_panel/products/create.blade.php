@extends('admin_panel.adminLayout') @section('content')
<script src="{{asset('js/lib/jquery.js')}}"></script>
<script src="{{asset('js/dist/jquery.validate.js')}}"></script>
<script src="{{asset('js/dist/additional-methods.js')}}"></script>

<style>label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}</style>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a style="color:green;" href="{{route('admin.products')}}">
                                < Back to List</a>
                                    <br>
                                    <br>
                                    <h4 >Create product</h4>
                                    <br>
                                    <img  id="imageHolder" src="" alt="add image" height="300" width="300"/>
                                    <br>
                                    <input  type="file" name="inp_files" id="inp_files" multiple="multiple" >
                                    <br>
                                    <div id="empty_image"> </div>
                                    <form class="forms-sample" method="post"  id="product_form">
                                        {{csrf_field()}}
                                       
                                       
                                        <input id="inp_img" name="img" type="hidden" value="">
                                        <br><br>
                                        <div id="for_extension_error"></div>
                                        <div class="form-group">
                                            <label  >Product Name*</label>
                                            <input type="text" class="form-control" id="Name" name="Name"  value="">
                                        </div>
                                        <div class="form-group">
                                            <label  for="Description">Product Description*</label>
                                            <textarea type="textarea" class="form-control" id="Description" name="Description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label  for="Category">Category*</label>
                                            <select class="form-control form-control-md" id="Category" name="Category">
                                                @php foreach($catlist->all() as $cat) {
                                                echo "<option value=".$cat->id." >".$cat->name." </option>"; $select_attribute=''; } @endphp
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label  >Product Price*</label>
                                            <input type="text" class="form-control" name="Price" id="Price" value="">
                                        </div>
                                        <div class="form-group">
                                            <label  >Product Discounted Price*</label>
                                            <input type="text" class="form-control" id="Discounted_Price"  name="Discounted_Price" value="">
                                        </div>
                                        
                                        <div class="form-group ">
                                            <label  >Product Colors*</label>
                                            
                                            <input type="color" id="picker" class="form-control col-md-2">
                                            <br>
                                            <a onclick="addColor()" class="btn btn-sm btn-primary" >add</a>
                                            <br>
                                            <br>
                                            <div id="colors" style="border:1px solid #eee"> 
                                            </div>  
                                            <br>            
                                            <input type="text" class="form-control" id="color_list" name="Colors" value="" hidden>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label >Product Tags*</label>
                                            <input type="text" class="form-control" id="Tags" name="Tags" value="">
                                        </div>
                                        <input type="submit" name="saveButton" class="btn btn-success mr-2" id="saveButton" value="Create"  />
                                    </form>
                                    @if($errors->any())


                                    <ul>
                                        @foreach($errors->all() as $err)
                                        <tr>
                                            <td>
                                                <li>{{$err}}</li>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </ul>
                                    @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
    
<script>
 
  function fileChange(e) {
 
     document.getElementById('inp_img').value = '';
 
     for (var i = 0; i < e.target.files.length; i++) { 
     
        var file = e.target.files[i];
 
        if (file.type == "image/jpeg" || file.type == "image/png") {
 
           var reader = new FileReader();  
           reader.onload = function(readerEvent) {
 
              var image = new Image();
              image.onload = function(imageEvent) { 
 
                 var max_size = 600;
                 var w = image.width;
                 var h = image.height;
                   
                 if (w > h) {  if (w > max_size) { h*=max_size/w; w=max_size; }
                 } else     {  if (h > max_size) { w*=max_size/h; h=max_size; } }
               
                 var canvas = document.createElement('canvas');
                 canvas.width = w;
                 canvas.height = h;
                 canvas.getContext('2d').drawImage(image, 0, 0, w, h);
                 if (file.type == "image/jpeg") {
                    var dataURL = canvas.toDataURL("image/jpeg", 1.0);
                 } else {
                    var dataURL = canvas.toDataURL("image/png");    
                 }
                 document.getElementById('inp_img').value += dataURL + '|';
              }
              image.src = readerEvent.target.result;
           }
           reader.readAsDataURL(file);
           
            readURL(this);

        } else {
           document.getElementById('inp_files').value = ''; 
           alert('Please only select images in JPG or PNG format.');   
           return false;
        }
     }
 
  }
 
  document.getElementById('inp_files').addEventListener('change', fileChange, false); 
         
</script>    
    
<script>
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imageHolder').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    
    
    
  
function onReadyColorList(arrayOfColor){
    var addedColor = document.querySelector("#color_list").value;
    var arrayOfColor = addedColor.split(',');
    for(var i =0 ; i< arrayOfColor.length; i++){
        newColor = `<div style="height:25px;display:inline-block;margin:5px;width:25px!important;background-color:${arrayOfColor[i]}"></div>`;
        document.querySelector("#colors").innerHTML += newColor;
    }
}

function addColor(){
    var pickedColor = document.querySelector("#picker").value;
    newColor = `<div style="height:25px;display:inline-block;margin:5px;width:25px!important;background-color:${pickedColor}"></div>`;
    var addedColor = document.querySelector("#color_list").value;
    var arrayOfColor = [];
    if (addedColor != ""){  
        arrayOfColor = addedColor.split(',');
        if(!arrayOfColor.includes(pickedColor)){
            arrayOfColor.push(pickedColor);
            document.querySelector("#color_list").value = arrayOfColor.join(',');
            document.querySelector("#colors").innerHTML += newColor;
        }
    }
    else{
        arrayOfColor.push(pickedColor);
        document.querySelector("#colors").innerHTML += newColor;
        document.querySelector("#color_list").value = pickedColor;
    }   
       // console.log(addedColor);          
}


</script>
    
    
<!--JQUERY Validation-->
<script>
	
	$(document).ready(function() {
		
        
        
		$("#product_form").validate({
            
			rules: {
              
                Name: "required",
                inp_files: "required",
                
                Description: "required",
                Category: "required",
                Price: {
					required: true,
					number: true
				},
                Discounted_Price: {
					required: true,
					number: true
				},
                colors: "required",
                Tags: "required"
                
                
				
				
				
				
			},
			messages: {
				
				Name: "No Name is Entered",
                inp_files:  "ERRRERRR",
                Description: "No Description is Entered",
                Category: "No Category is Selected",
                
				Price: {
					required: "No Price is Entered",
					number: "Invalid Price"
				},
                Discounted_Price: {
					required: "No Price is Entered",
					number: "Invalid Price"
				},
                colors: "No Color is Selected",
                Tags: "No Tags is Selected",
				
				
			}
            
            
            
		});
        
                

		
	});
    
  
    
    
	</script>
<!--/JQUERY Validation-->    
@endsection
