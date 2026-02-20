@extends('layouts.login_app')

@section('title') Login @endsection

@section('center')




    <span class=" p-0 text-danger " style="font-size:0.8rem">  {{ session('errormessage') }}</span>

 
    <form action="{{ route('login_admin')}}" method="POST">    
        @csrf
        <div class="mb-3 text-start">
            <label class="form-label" for="email">USERNAME</label>
            <div class="form-icon-container">
              
              <input name="username" class="form-control form-icon-input  {{ session('classDiv') }}" id="username" type="text" placeholder="example" />
              <span class="fas fa-user text-900  form-icon"></span>

            </div>
          </div>
          <div class="mb-3 text-start">
            <label class="form-label" for="password">PASSWORD</label>
            <div class="form-icon-container">
              <input class="form-control form-icon-input {{ session('classDiv') }}" id="password" name="password" type="password" placeholder="Password" /><span class="fas fa-key text-900  form-icon"></span>
            </div>
          </div>

      <button type="submit" class="btn btn-primary w-100 mb-3">Sign In</button>
    </form>

@endsection

