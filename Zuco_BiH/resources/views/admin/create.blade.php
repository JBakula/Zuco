@extends('admin_layout')
@section('content')

    
        <div
        class="container text-center align-items-center justify-content-center container--pohvala pt-5"
      >
        <div class="card card--pohvala--problem mt-5">
          <div class="card-title mt-5 mb-3">
            <h3 class="heading-tertiary h1">Dodaj novog korisnika</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="{{route('adminStore')}}">
                @csrf
                <div class="bd-highlight my-3">
                    <input
                    placeholder="Ime i prezime"
                    class="card--input form-control"
                    type="text"
                    name="name"
                    id="name"
                    value="{{old('name')}}"
                    />
                    @error('name')
                        <p>{{$message}}</p>
                    @enderror
                </div>
                
                <div class="bd-highlight my-3">
                    <input
                    placeholder="Email"
                    class="card--input form-control"
                    type="email"
                    name="email"
                    id="email"
                    value="{{old('email')}}"
                    />

                    @error('email')
                        <p>{{$message}}</p>
                     @enderror
                </div>
                
                <div class="bd-highlight my-3">
                    <input
                    placeholder="Lozinka"
                    class="card--input form-control"
                    type="password"
                    name="password"
                    id="password"
                    />
                    @error('password')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                
                <div class="bd-highlight my-3">
                    <input
                    placeholder="Potvrdi lozinku"
                    class="card--input form-control"
                    type="password"
                    name="password_confirmation"
                    id="password"
                    />
                    @error('password_confirmation')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="bd-highlight my-5">
                    <button class="btn btn-primary button--send btn-prijavi">
                      Prijava
                    </button>
                  </div>
                  <div class="bd-highlight my-3">
                    <a href="{{route('adminList')}}" class="go-back">Idi nazad</a>
                  </div>
            </form>
          </div>
        </div>
      </div>
    

 @endsection