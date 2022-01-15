@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('admin.user.doAdd')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="full_name" class="form-control" placeholder="Full Name">
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
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
        <li class="breadcrumb-item"><a href="{{route('admin.user.list')}}">User</a></li>
        <li class="breadcrumb-item active">Add</li>
    </ol>
@endsection

@section('heading')
    User
@endsection
