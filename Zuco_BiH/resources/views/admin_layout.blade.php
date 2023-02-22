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
    <title>Zućo BiH - Pohvale</title>
    <link rel="stylesheet" href="/css/create.css" />

    @if(session()->has('poruka'))
      <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
       class="alert alert-primary text-center mt-4 " style="position: absolute;
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
  <body class="admin_body mt-5">
    <!-- Admin Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="{{route('pocetna')}}" class="navbar-brand logo">
          <img class="logo-admin" src="/images/favico.png" alt="" />
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
              <a href="{{route('pohvaleIndex')}}" class="nav-link">Pohvale</a>
            </li>
            <li class="nav-item h1">
              <a href="{{route('problemiIndex')}}" class="nav-link">Problemi</a>
            </li>
            <li class="nav-item h1">
              <a href="{{route('adminList')}}" class="nav-link">Admini</a>
            </li>
            <li class="nav-item h1 pt-2">
              <form method="POST" style="all:unset" action="{{route('odjava')}}">
                @csrf

                  <button style="all: unset; color:rgba(255, 255, 255, 0.55); cursor: pointer;" type="submit">Odjava</button>
              </form> 
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script type="text/javascript">
     
         $('.show_confirm').click(function(event) {
              var form =  $(this).closest("form");
              var name = $(this).data("name");
              event.preventDefault();
              swal({
                  title: `Jeste li sigurni da želite izbrisati?`,
                  text: "Ako izbrišete nestat će zauvjek.",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                  form.submit();
                }
              });
          });
      
    </script>
  </body>
</html>
