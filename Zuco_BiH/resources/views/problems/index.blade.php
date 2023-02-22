@extends('admin_layout')
@section('content')
   <!-- tablica -->
   <main>
    <div class="container">
      <div class="d-flex flex-row-reverse button--choose--category">
        <div class="bd-highlight mx-3">
          <a href="{{route('odabrani')}}" class="button--choose--btn">Odobreni</a>
        </div>
        <div class="bd-highlight mx-3">
          <a href="{{route('neodabrani')}}" class="button--choose--btn">Neodobreni</a>
        </div>

      </div>
      <table class="table table--pohvale">
        <thead class="table--pohvale__head">
          <tr>
            <th scope="col">Opis</th>
            <th scope="col">Ulica</th>
            <th scope="col">Grad</th>
            <th scope="col">Kategorija</th>
            <th scope="col">Podkategorija</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="table--pohvale__body">
         @foreach ($problemi as $item)
          <tr>
            <td>{{$item->description}}</td>
            <td>{{$item->street}}</td>
            <td>{{$item->city->city_name}}</td>
            <td>{{$item->category->category_name}}</td>
            <td>{{$item->sub_category->sub_category_name}}</td>
            <td class="table--pohvale__buttons text-center">
              <a href="{{route('problemEdit',$item->id)}}" class="button--choose--btn">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-eye svg"
                viewBox="0 0 16 16"
              >
                <path
                  d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"
                />
                <path
                  d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"
                />
              </svg>
            </a>
              <form method="POST" action="{{ route('problemDelete', $item->id) }}">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="button--choose--btn show_confirm" data-toggle="tooltip" title='Delete'><svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-recycle svg"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z"
                  />
                </svg></button>
            </form>
            </td>
          </tr>
           @endforeach
        </tbody>
      </table>
    </div>
  </main>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

 $('.show_confirm').click(function(event) {
      var form =  $(this).closest("form");
      var name = $(this).data("name");
      event.preventDefault();
      swal({
          title: `Are you sure you want to delete this record?`,
          text: "If you delete this, it will be gone forever.",
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
@endsection
