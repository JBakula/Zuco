@extends('admin_layout')
@section('content')

<div
      class="container text-center align-items-center justify-content-center container--pohvala"
    >
      <div class="card card--pohvala--problem mt-5">
        <div class="card-title mt-5 mb-3">
          <h3 class="heading-tertiary h1">Problem</h3>
        </div>
        <div class="card-body">
          <form method="post" action="{{route('updateProblem',$problem->id)}}">
            @csrf
            @method('PUT')
              <div class="row">
                <div class="col-md-12 bd-highlight my-4">
                  <img src="{{$problem->file ? asset('storage/'.$problem->file):asset('/images/no-image.png')}}" alt="Problem/Pohvala Img">
                </div>
                <div class="col-md-6 bd-highlight my-3">
                  <input
                    placeholder="Opis"
                    class="card--input form-control"
                    type="text"
                    value="{{$problem->description}}"
                    name="description"
                  />
                </div>
                
        
                <div class="col-md-6 bd-highlight my-3">
                  <input
                    placeholder="Ulica"
                    class="card--input form-control"
                    type="text"
                    value="{{$problem->street}}"
                    name="street"
                  />
                </div>
              </div>
              
              <div class="row d-flex justify-content-center">
                <select class="col bd-highlight m-3 card--input--select" name="city_id" >
                  <option value="{{$problem->city_id}}" >{{$problem->city->city_name}}</option>
                  @foreach ($gradovi as $item)
                    <option value="{{$item->city_id}}">{{$item->city_name}}</option>
                  @endforeach
                  
                </select>
                <select class="col bd-highlight m-3 card--input--select" name="category_id" >
                    <option value="{{$problem->category_id}}" >{{$problem->category->category_name}}</option>
                    @foreach ($kategorije as $item)
                      <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                    @endforeach
                </select>
                <select class="col bd-highlight m-3 card--input--select" name="sub_category_id" >
                    <option value="{{$problem->sub_category_id}}" >{{$problem->sub_category->sub_category_name}}</option>
                    @foreach ($podkategorije as $item)
                      <option value="{{$item->sub_category_id}}">{{$item->sub_category_name}}</option>
                    @endforeach
                </select>
                
                <div class="col bd-highlight m-3 card--input--select odobreno">
                  <div>
                    Odobreno: 
                  </div>
                  @if ($problem->admin_check == 1)
                    <input class="odobreno--check" type="checkbox" name="admin_check" id="admin_check" checked>
                  @else
                    <input class="odobreno--check" type="checkbox" name="admin_check" id="admin_check" >
                  @endif
                  
                </div>
                
              <input type="hidden" name="report_type_id" value="{{$problem->report_type_id}}">  
              </div>
              <div class="bd-highlight my-3">
                <button class="btn btn-primary button--send">Uredi</a>
              </div>
              <div class="bd-highlight my-3">
                <a href="{{route('problemiIndex')}}" class="go-back">Idi  nazad</a>
              </div>
            </form>
        </div>
      </div>
    </div>
    @endsection