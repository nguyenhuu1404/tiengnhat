@extends('frontend.layouts.master')
@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<section class="banner">
        <img src="/images/banner-lesson.png">
        <div class="breadcrumb-position">
            <div class="container">
                <div class="title-breadcrumb">Học tiếng Nhật online</div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Báo cáo</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="w-100 main-news">
        <div class="container">
            <div class="card mb-5">
                <div class="card-header">
                    <form action="/baocao" method="get">
                        <div class="form-row align-items-center">

                            <div class="col-auto">
                                <input type="text" id="from" name="from" class="form-control" placeholder="Từ ngày" value="{{request()->get('from')}}">
                            </div>
                            <div class="col-auto">
                                <input type="text" id="to" name="to" class="form-control" placeholder="Đến ngày" value="{{request()->get('to')}}" >
                            </div>

                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Báo cáo</button>
                            </div>
                        </div>
                    </form>
                </div>
                @if(count($reports) > 0)
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">STT</th>
                            <th scope="col">User</th>
                            <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($reports as $key => $report)
                            <tr>
                                <th scope="row">{{$key +1}}</th>
                                <td>{{ isset($dataUsers[$report->user_id]) ? $dataUsers[$report->user_id] : ''}}</td>
                                <td>{{$report->price}}</td>
                            </tr>
                        @endforeach
                        <tr>
                        <th scope="row">Total</th>
                            <td></td>
                            <td>{{number_format($total, 0, ',', '.')}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                @endif

            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });

    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }

      return date;
    }
  } );
  </script>
@endpush
