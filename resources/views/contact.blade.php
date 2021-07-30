@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Subscribe to our newsletter</div>

          <div class="card-body">

            <form method="POST" action="/contact">
              @csrf
              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                <div class="col-md-6">
                  <input id="email" type="text" class="form-control" name="email" >
                  
                  @error('email')
                    <p class="is-invalid text-danger">{{ $message }}</p>
                  @enderror
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-outline-primary">
                    Contact Us
                  </button>
                </div>
              </div>
            </form>
            
            @if (session('message'))
                <div>
                  {{ session('message') }}  
                </div>
            @endif
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
