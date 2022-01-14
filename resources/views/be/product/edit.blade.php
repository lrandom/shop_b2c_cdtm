@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post"
                      enctype="multipart/form-data"
                      action="{{route('admin.product.doEdit',['id'=>$product->id])}}">
                    @csrf
                    <div class="card-body">
                        <div class="saved-images">
                            @foreach($product->images as $item)
                                <img style="width: 100px; height: 100px" src="{{asset($item->path)}}"/>
                            @endforeach
                        </div>

                        <div class="preview-images">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Images</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="images[]" multiple class="images-input custom-file-input"
                                           id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{$product->name}}" class="form-control"
                                   placeholder="Enter name">
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                                <option value="0">All</option>
                                @foreach($categories as $cat)
                                    <option <?php if ($cat->id == $product->category_id) {
                                        echo 'selected="selected"';
                                    } ?> value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="txt-content" class="form-control txt-content"
                                      placeholder="Enter Content">{{$product->content}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" value="{{$product->price}}"
                                   placeholder="Enter Price">
                        </div>

                        <div>
                            <label>Brand</label>
                            <select name="brand_id" class="form-control">
                                <option></option>
                            </select>
                        </div>

                        <div>
                            <label>Discount Type</label>
                            <select name="discount_type" class="form-control">
                                <option value="1" <?php if ($product->discount_type == 1) {
                                    echo 'selected="selected"';
                                } ?>>Percentage
                                </option>
                                <option value="2" <?php if ($product->discount_type == 2) {
                                    echo 'selected="selected"';
                                } ?>>Direct Amount
                                </option>
                            </select>
                        </div>

                        <div>
                            <label>Discount Amount</label>
                            <input type="number" value="{{$product->discount_amount}}" name="discount_amount"
                                   class="form-control"
                                   placeholder="Enter Discount Amount">
                        </div>

                        <div class="form-group">
                            <label>Meta Keyword</label>
                            <input type="text" name="meta_keyword" value="{{$product->meta_keyword}}"
                                   class="form-control" placeholder="Meta Keyword">
                        </div>

                        <div class="form-group">
                            <label>Meta Content</label>
                            <input type="text" name="meta_content" value="{{$product->meta_content}}"
                                   class="form-control"
                                   placeholder="Enter Meta Content">
                        </div>

                        <div class="form-group">
                            <label>Meta Description</label>
                            <input type="text" name="meta_description" value="{{$product->meta_description}}"
                                   class="form-control"
                                   placeholder="Enter Meta Description">
                        </div>

                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea name="short_description" value="{{$product->short_description}}"
                                      class="form-control"></textarea>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('bread-crumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.product.list')}}">Product</a></li>
        <li class="breadcrumb-item active">Add</li>
    </ol>
@endsection

@section('script')
    <style>
        .preview-images {
            display: flex;
            justify-content: flex-start;
            gap: 5px
        }

        .preview-images img {
            width: 150px;
            height: 100px;
        }

        .remove-img {
            position: absolute;
            right: 5px;
            top: 5px;
            border: none;
            outline: none;
            width: 20px;
            height: 20px;
            border-radius: 999px;
            background: #ffffff;
            display: flex;
            justify-content: center;
            items-align: center;
        }

        .txt-content {
            height: 500px;
        }
    </style>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>

        let filesAmount = [];

        function removeImage(i) {
            const fileListArr = Array.from(filesAmount);
            fileListArr.splice(i);
            filesAmount = fileListArr;
            $('.preview-images').find('.img-item').eq(i).remove();
            $('.images-input').files = fileListArr;
        }

        const imagesPreview = function (input, placeToInsertImagePreview) {
            if (input.files) {
                filesAmount = input.files;
                $('.preview-images').empty();
                for (let i = 0; i < filesAmount.length; i++) {
                    const reader = new FileReader();

                    reader.onload = function (event) {
                        const node = document.createElement('span');
                        node.addEventListener('click', () => {
                            removeImage(i);
                        })
                        node.style.position = 'relative';
                        node.classList.add('img-item');
                        node.innerHTML = `<img src="${event.target.result}" alt="Image" style="width:150px;height:100px;"><span class="remove-img">
<div>x</div></span>`;
                        $(placeToInsertImagePreview).append(node);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        $('.images-input').on('change', function () {
            $('.saved-images').remove();
            imagesPreview(this, '.preview-images');
        });


    </script>
    <script>
        tinymce.init({
            selector: '.txt-content',
            height: '500'
        })
    </script>
@endsection