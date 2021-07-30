@extends('layouts.app')


@section('content')
    <div class="container">
        <form action="/payments" method="POST">
            @csrf
            
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Make Payment</button>
            </div>
            
        </form>
    </div>
@endsection
