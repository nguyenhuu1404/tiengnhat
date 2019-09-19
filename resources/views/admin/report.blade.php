@extends('voyager::master')
@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-browser"></i> Báo cáo
        </h1>
    </div>
@stop
@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<div class="page-content browse container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="panel-body">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <form class="form-inline" action="/admin/baocao" method="get">
                                <div style="margin-left: 15px;" class="form-group">
                                    <input type="text" id="from" name="from" class="form-control" placeholder="Từ ngày" value="{{request()->get('from')}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="to" name="to" class="form-control" placeholder="Đến ngày" value="{{request()->get('to')}}" >
                                </div>

                                <button type="submit" class="btn btn-primary">Xem báo cáo</button>
                            </form>
                        </div>
                        @if(count($reports) > 0)
                        <div class="panel-body">
                            <table style="margin-top: 15px;" class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th>STT</th>
                                    <th>User</th>
                                    <th>Price</th>
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
            </div>
        </div>
    </div>
</div>
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
