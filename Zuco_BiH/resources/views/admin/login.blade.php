<!DOCTYPE html>
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
    <title>Zućo BiH - Login</title>
    <link rel="stylesheet" href="/css/create.css" />
  </head>
  <body class="admin_body">
    <div
      class="container text-center align-items-center justify-content-center container--pohvala"
    >
      <div class="card card--pohvala--problem mt-5">
        <div class="card-title mt-5 mb-3">
          <h3 class="heading-tertiary h1">Prijavi se</h3>
        </div>
        <div class="card-body">
          <form method="POST" action="{{route('prijava')}}">
            @csrf
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
            <div class="bd-highlight my-5">
              <button class="btn btn-primary button--send btn-prijavi">
                Prijava
              </button>
            </div>
            <div class="bd-highlight my-3">
              <a href="{{route('pocetna')}}" class="go-back">Povratak</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </body>
</html>
