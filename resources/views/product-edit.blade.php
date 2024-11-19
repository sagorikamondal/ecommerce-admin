@extends("layouts.main")
                @section("preload")
                <!-- preload -->
               <!-- @include("preload") -->
                <!-- /preload -->
                 @endsection
             @section("main-content")
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Edit Product</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.php"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">Ecommerce</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Edit product</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- form-add-product -->
                                <form class="tf-section-2 form-add-product" action="{{url('/product/update-product')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="wg-box">
                                        <input type="hidden" name="id" value="{{$list->id}}">
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Product name <span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" placeholder="Enter product name" name="product_name" tabindex="0" value="{{$list->product_name}}" aria-required="true" required="">
                                            <div class="text-tiny">Do not exceed 20 characters when entering the product name.</div>
                                        </fieldset>
                                        <div class="gap22 cols">
                                            <fieldset class="category">
                                                <div class="body-title mb-10">Category <span class="tf-color-1">*</span></div>
                                                
                                                <div class="select">
                                                    <select class="" name="category_id">
                                                        <option>Choose category</option>
                                                        @foreach($categories as $category)
                                                        <option value="{{$category->category_id}}" @if($list->category->category_name==$category->category_name) selected @endif>{{$category->category_name}}</option>
                                                        @endforeach
                                                       
                                                    </select>
                                                </div>
                                            </fieldset>
                                            <fieldset class="male">
                                                <div class="body-title mb-10">Gender <span class="tf-color-1">*</span></div>
                                                <div class="select">
                                                    <select class="" name="gender">
                                                        <option value="male" @if($list->gender=="male") selected @endif>Male</option>
                                                        <option value="female" @if($list->gender=="female") selected @endif>Female</option>
                                                        <option value="other" @if($list->gender=="other") selected @endif>Other</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="gap22 cols">
                                            <fieldset class="category">
                                                <div class="body-title mb-10">Base Price ₹ <span class="tf-color-1">*</span></div>
                                                <input class="mb-10" type="text" placeholder="₹ " name="main_price" tabindex="0" value="{{$list->main_price}}" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="male">
                                                <div class="body-title mb-10">Offer Price ₹ </div>
                                                <input class="mb-10" type="text" placeholder="₹ " name="offer_price" tabindex="0" value="{{$list->offer_price}}">
                                            </fieldset>
                                            <fieldset class="male">
                                                <div class="body-title mb-10">Total Quantity </div>
                                                <input class="mb-10" type="text" placeholder="Quantity" name="quantity" tabindex="0" value="{{$list->total_quantity}}">
                                            </fieldset>
                                        </div>
                                      
                                        <fieldset class="description">
                                            <div class="body-title mb-10">Description <span class="tf-color-1">*</span></div>
                                            <textarea class="mb-10" name="description" placeholder="Description" tabindex="0" aria-required="true" name="description" required="">{{$list->description}}</textarea>
                                            <div class="text-tiny">Do not exceed 100 characters when entering the product name.</div>
                                        </fieldset>
                                       
                                       
                                        
                                    </div>
                                    <div class="wg-box">
                                        <fieldset>
                                            <div class="body-title mb-10">Upload images</div>
                                            <div class="upload-image mb-16">
                                            <!-- <div class="item">
                                                    <img src="images/upload/upload-1.png" alt="">
                                                </div>
                                            <div class="item">
                                                    <img src="images/upload/upload-1.png" alt="">
                                                </div>
                                                <div class="item">
                                                    <img src="images/upload/upload-1.png" alt="">
                                                </div> -->
                                                <div id="image_gallery" class="item gallery">
                                                    
                                                    <!-- <img src="images/upload/upload-2.png" alt=""> -->
                                                </div>
                                                <div class="item up-load">
                                                    <label class="uploadfile">
                                                        <span class="icon">
                                                            <i class="icon-upload-cloud"></i>
                                                        </span>
                                                        <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                        <input type="file" multiple  name="image[]" id="gallery-photo-add" >
                                                    </label>
                                                </div>
                                            </div>
                                            <fieldset class="upload-image mb-16">
                                        @php
                                            $images=explode(",",$list->image);
                                            @endphp
                                            @foreach($images as $image)
                                            <img src="{{url('assets/img')}}/{{$image}}" style="width: 100px;" alt="">
                                            @endforeach
                                            </fieldset>
                                        
                                            <div class="body-text">You need to add at least 4 images. Pay attention to the quality of the pictures you add, comply with the background color standards. Pictures must be in certain dimensions. Notice that the product shows all the details</div>
                                        </fieldset>
                                        <div class="cols gap22">
                                            <fieldset class="name">
                                                <div class="body-title mb-10">Add size</div>
                                               
                                                <input list="size" name="size" class="form-control" placeholder="choose size" value="{{$list->size}}">
                                                <!-- <input list="browsers" name="browser" id="browser"> -->
                                                <datalist id="size">
                                                        <option value="jhj">
                                                        @foreach($records as $record)
                                                        <option value="{{$record->size}}">
                                                        @endforeach
                                                   
                                                </datalist>
                                               
                                                <div class="list-box-value mb-10">
                                                @foreach($records as $record)
                                                    <div class="box-value-item"><div class="body-text">SIZE - {{$record->size}}</div></div>
                                                    @endforeach
                                                    
                                                </div>
                                               
                                            </fieldset>
                                            <fieldset class="name">
                                                <div class="body-title mb-10">Product date</div>
                                                <div class="select">
                                                    <input type="date" name="date" value="{{$list->created_at}}">
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="cols gap10">
                                            @php
                                        $product_permisson=ltrim(Auth::user()->role->product_permission,',');
                                        $permissions=explode(",",$product_permisson);
                                          @endphp

                                         @foreach($permissions as $permission)
                                        @if($permission=="create")
                                            <button class="tf-button w-full" type="submit">Update product</button>
                                           
                                            @endif
                                            @endforeach
       
                                        </div>
                                    </div>
                                  
                                </form>
                                <!-- /form-add-product -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024 Design with</div>
                            <i class="icon-heart"></i>
                            <div class="body-text">by <a href="https://mridangsolution.com/">Mridang Solution</a> All rights reserved.</div>
                        </div>
                        <!-- /bottom-page -->
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->
@endsection


@section('extra-js')
<script>
    $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;
         if(filesAmount<5){
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }
        else{
            alert('Only 4 image allowed');
        }
        }

    };

    $('#gallery-photo-add').on('change', function() {
      
        imagesPreview(this, 'div.gallery');
    });
});
</script>
@endsection



