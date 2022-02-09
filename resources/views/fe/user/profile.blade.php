@extends('fe.layout')
@section('content')
    <div class="grid grid-cols-2">
        <div>
            <ul>
                <li><a href="">Profile</a></li>
                <li><a href="">Change Password</a></li>
                <li><a href="">My Order</a></li>
                <li><a href="">Logout</a></li>
            </ul>
        </div>

        <div>
            <form>
                <input type="text" placeholder="Full Name">
                <input type="text" placeholder="Phone">
                <input type="text" placeholder="Email">
                <button>Submit</button>
            </form>
        </div>
    </div>
@endsection
