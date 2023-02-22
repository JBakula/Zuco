@extends('admin_layout')
@section('content')
{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />
    <link rel="shortcut icon" type="image/png" href="images/favico.png" />
    <title>Zućo BiH - Pohvale</title>
    <link rel="stylesheet" href="/css/create.css" />
  </head>
  <body class="pohvale_list_body">
    <!-- Admin Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="index.html" class="navbar-brand logo">
          <img class="logo-admin" src="images/favico.png" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item h1">
                <a href="pohvale_list.html" class="nav-link">{{auth()->user()->name}}</a>
              </li>
            <li class="nav-item h1">
              <a href="#" class="nav-link">Pohvale</a>
            </li>
            <li class="nav-item h1">
              <a href="#" class="nav-link">Problemi</a>
            </li>
            <li class="nav-item h1">
              <a href="{{route('adminList')}}" class="nav-link active">Admini</a>
            </li>
            <li class="nav-item h1">
              <form class="inline" method="POST" action="{{route('odjava')}}">
                @csrf
                <button type="submit">Odjava</button>
              </form> 
            </li>
          </ul>
        </div>
      </div>
    </nav> --}}
    <main class="mt-5">
        <div
        class="container text-center align-items-center justify-content-center container--pohvala"
      >
        <div class="card card--pohvala--problem mt-5">
          <div class="card-title mt-5 mb-3">
            <h3 class="heading-tertiary h1">Uredi korisnika</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="{{route('adminUpdate', $data->id)}}">
                @csrf
                @method('PUT')
                <div class="bd-highlight my-3">
                    <input
                    placeholder="Ime i prezime"
                    class="card--input form-control"
                    type="text"
                    name="name"
                    id="name"
                    value="{{$data->name}}"
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
                    value="{{$data->email}}"
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
                    value=""
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
                    value=""
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
                  <a href="index.html" class="go-back">Idi nazad</a>
                </div>
            </form>

          </div>
        </div>
      </div>
    </main>
    {{-- <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script> --}}
  {{-- </body>
</html> --}}
@endsection('content')
