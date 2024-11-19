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
                                    <h3>Category infomation</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.php"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">Category</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Edit category</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- new-category -->
                                <div class="wg-box">
                                    <form class="form-new-product form-style-1" action="{{url('/category/update')}}" method="post" enctype="multipart/form-data" >
                                        @csrf
                                        <input type="hidden" name="id" value="{{$category->category_id}}">
                                        <fieldset class="name">
                                            <div class="body-title">Category name <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="Category name" name="category_name" value="{{$category->category_name}}" tabindex="0" value="" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset>
                                            <div class="body-title">Upload images <span class="tf-color-1">*</span></div>
                                            <div class="upload-image flex-grow">
                                                <div class="item up-load">
                                                    <label class="uploadfile" >
                                                        <span class="icon">
                                                            <i class="icon-upload-cloud"></i>
                                                        </span>
                                                        <span class="body-text">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                        <input type="file" id="gallery-photo-add" name="image">
                                                        <div class="gallery" style="width: 100px;"></div>
                                                       
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                               <div class="bot">
                                        <div class="" style="width: 100px;">
                                        <img src="{{url('/assets/img')}}/{{$category->image}}" alt="">

                                        </div>

                                            </div>
                                        
                                        <fieldset>
                                            <div class="body-title">Upload Icon <span class="tf-color-1">*</span></div>
                                            <div class="upload-image flex-grow">
                                                <div class="item up-load">
                                                    <label class="uploadfile">
                                                        <span class="icon">
                                                            <i class="icon-upload-cloud"></i>
                                                        </span>
                                                        <span class="body-text">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                        <input type="file"  name="icon"  id="gallery-icon-add">
                                                        <div class="icongallery" style="width: 100px;"></div>
                                                    </label>
                                                </div>
                                            </div>
                                            
                                        </fieldset>
                                        <div class="bot">
                                        <div class="" style="width: 100px;">
                                        <img src="{{url('/assets/img')}}/{{$category->icon}}" alt="">

                                        </div>

                                            </div>
                                       
                                        
                                        <div class="bot">
                                            <div></div>
                                            <button class="tf-button w208" type="submit">Update</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /new-category -->
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

    $('#gallery-icon-add').on('change', function() {
      
        imagesPreview(this, 'div.icongallery');
    });
});
</script>
@endsection



