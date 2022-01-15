@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Variant Value</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('admin.variant_value.doEdit',['id'=>$variantValue->id])}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="variant_value" class="form-control" value="{{$variantValue->value}}"
                                   placeholder="Enter Value">
                        </div>
                        <div class="form-group">
                            <label>Variant</label>
                            <select class="form-control" name="variant_id">
                                @foreach($variants as $variant)
                                    <option  <?php if($variantValue->variant_id==$variant->id){echo 'selected="selected"';} ?> value="{{$variant->id}}">{{$variant->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

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
        <li class="breadcrumb-item"><a href="{{route('admin.variant_value.list')}}">Variant Value</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@endsection


@section('heading')
    Variant Value
@endsection
