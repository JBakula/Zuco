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
    <title>Žućo BiH</title>
    <link rel="stylesheet" href="sass/style.css" />
    @if(session()->has('poruka'))
      <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
       class="alert alert-primary text-center mt-4" style="position: absolute;
       z-index: 10;
     
       top: 7rem;
       right: 8rem;
       border-radius: 1rem;
       padding: 2rem 1rem;
       padding-bottom: 0.8rem;" role="alert">
      <p style="font-size: 25px">
          {{session('poruka')}}
      </p>
      </div>
    @endif
  </head>
  <body>
    <div class="container--home">
      <!-- heading -->
      <header class="header">
        <div class="container">
          <div class="header__logo-box">
            <img class="header__logo" src="images/favico.png" alt="Logo" />
          </div>
          <div class="header__text-box text-center">
            <h1 class="heading-primary">
              <span class="heading-primary--top mb-3">Žućo</span>
              <span class="heading-primary--bottom">čuvajmo naš grad</span>
            </h1>
            <div class="row g-1">
                @foreach ($tip_prijave as $item)
                <div class="col-md my-4">
                  <a href="{{route('createProblem',$item->id)}}" class="btn btn--white btn--animated">{{$item->report_type_name}}</a>
                </div>
              @endforeach 
            </div>
          </div>
        </div>
      </header>
      <!-- Pohvale -->
      <section class="section-features">
        <div class="container">
          <div class="text-center mb-4">
            <h2 class="heading-secondary">Pohvale</h2>
          </div>
          <div class="row d-flex justify-content-center">
            @foreach ($pohvala as $item)
            <div class="col-md m-3 feature-box-container">
              <div class="feature-box">
                @php
                  $pom = $item->file;
                  $p = substr($pom, -4);
                @endphp
                @if ($p == ".mp4" || $p == '.mp3' || $p=='.org')
                <video width="320" height="240" controls muted>
                    <source src="{{$item->file ? asset('storage/'.$item->file) 
                        : asset('/images/no-image.jpg')}}"
                        type="video/mp4">
                </video>
                @else
                <img
                class="feature-box__img mb-4"
                src="{{$item->file ? asset('storage/'.$item->file):asset('/images/no-image.png')}}"
                alt=""
              />
                @endif
                <h3 class="heading-tertiary u-margin-bottom-small">
                    {{$item->city->city_name}}, {{$item->street}}
                </h3>
                <p class="feature-box__text">
                    {{$item->description}}
                </p>
              </div>
            </div>
            @endforeach

            </div>
          </div>
      </section>
      <!-- Problemi -->
      <section class="section-not-features">
        <div class="container">
          <div class="text-center mb-4">
            <h2 class="heading-secondary text-white mb-3">Problemi</h2>
          </div>
          <div class="row d-flex justify-content-center">
            @foreach ($problem as $item)
            <div class="col-md m-3 feature-box-container">
              <div class="feature-box">
                @php
                $pom = $item->file;
                $p = substr($pom, -4);
                @endphp
                @if ($p == ".mp4" || $p == '.mp3' || $p=='.org')
                <video width="320" height="240" controls muted>
                    <source src="{{$item->file ? asset('storage/'.$item->file) 
                        : asset('/images/no-image.jpg')}}"
                        type="video/mp4">
                </video>
                @else
                <img
                class="feature-box__img mb-4"
                src="{{$item->file ? asset('storage/'.$item->file):asset('/images/no-image.png')}}"
                alt=""
              />
                @endif
                <h3 class="heading-tertiary u-margin-bottom-small">
                    {{$item->city->city_name}}, {{$item->street}}
                </h3>
                <ul class="my-3 list-group list-group-flush">
                  <li class="list-group-item bg-transparent my-1">
                    Lorem, ipsum dolor.
                  </li>
                  {{$item->description}}
                </ul>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
      <!-- Footer -->
      <footer class="bg-dark text-white" id="my-footer">
        <div class="container">
          <p class="copy">
            Copyright &copy; 2022 HACKtheZEN
            <a href="{{route('login')}}" class="admin">Admin</a>
          </p>
        </div>
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
  </body>
</html>
