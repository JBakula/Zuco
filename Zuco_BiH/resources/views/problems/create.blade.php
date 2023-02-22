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
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="/js/main.js"></script>
    <title>Zućo BiH - Pohvala</title>
    <link rel="stylesheet" href="/css/create.css" />
  </head>
  <body class="admin_body">
    <div
      class="container text-center align-items-center justify-content-center container--pohvala"
    >
      <div class="card card--pohvala--problem mt-5">
        <div class="card-title mt-5 mb-3">
          @if ($temp == 1)
            <h3 class="heading-tertiary h1">Problem</h3>
          @else
          <h3 class="heading-tertiary h1">Pohvala</h3>
          @endif
          
        </div>
        <div class="card-body">
          <form method="POST" action="{{route('storeProblem')}}" enctype="multipart/form-data">
            @csrf
            <!-- <div class="bd-highlight my-3">
              <input
                placeholder="Naslov"
                class="card--input form-control"
                type="text"
              />
            </div> -->
            <div class="bd-highlight my-3">
              <input class="card--input form-control" type="text" name="description" id="description" placeholder="Unesite opis"><br>
                @error('description')
                    <p >{{$message}}</p>
                @enderror
            </div>
            <div class="bd-highlight my-4">
              <input class="card--input--file form-control" type="file" name="file" id="file"><br>
              @error('file')
                    <p >{{$message}}</p>
              @enderror
            </div>
            
            <div class="bd-highlight my-3">
              <input
                placeholder="Ulica"
                class="card--input form-control"
                type="text"
                name="street"
                id="street"
              />
              @error('street')
                    <p >{{$message}}</p>
              @enderror
            </div>

            <div class="d-flex row justify-content-center">
              <select class="bd-highlight col m-3 card--input--select" name="city_id" id="city_id">
                <option disabled selected value="">Izaberite grad</option>
                @foreach($grad as $item)
                  <option value="{{ $item->id }}">{{ $item->city_name }}</option>
                @endforeach
              </select>
              @error('city_id')
                  <p >{{$message}}</p>
              @enderror
              <select class="bd-highligt col m-3 card--input--select" name="category_id" id="sub_category_name" >
                <option disabled selected value="">Izaberite kategoriju</option>  
                @foreach($kategorija as $item)
                  <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                @endforeach
              </select>   <br>
              @error('category_id')
                  <p >{{$message}}</p>
              @enderror
              {{--
              <select class="bd-highlight m-3 card--input--select" name="sub_category_id" id="sub_category_id" >
                <option disabled selected value="">Izaberite podkategoriju</option>  
                @foreach($pod_kategorije as $item)
                  <option value="{{ $item->id }}">{{ $item->sub_category_name }}</option>
                @endforeach
            </select><br>--}}
            <select class="bd-highlight col m-3 card--input--select" placeholder="Select Sub Category" name="sub_category_id" id="sub_category"
                    >
                    
            </select>
              @error('sub_category_id')
                  <p >{{$message}}</p>
              @enderror
            </div>
            <input type="hidden" name="report_type_id" id="report_type_id" value={{$temp}}>
            <div class="bd-highlight my-3">
              <button class="btn btn-primary button--send">Pošalji</a>
            </div>
            <div class="bd-highlight my-3">
              <a href="{{route('pocetna')}}" class="go-back">Idi nazad</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </body>
</html>
