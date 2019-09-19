@extends('voyager::master')
@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-browser"></i> Đáp án
        </h1>
    </div>
@stop
@section('content')
<script>
    function confirm_delete(answerId) {
        var r = confirm("Bạn có muốn xóa không?");
        if (r == true) {
            $('#form-' + answerId).submit();
        } else {
            return false;
        }
    }
</script>
<div class="page-content browse container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="panel-body">

                    <div class="panel panel-default">
                        @if(count($answers) > 0)
                        <div class="panel-body">
                            <table style="margin-top: 15px;" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Name</th>
                                        <th>Check</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($answers as $key => $answer)
                                    <tr>
                                        <th scope="row">{{$key +1}}</th>
                                        <td>{!! $answer->name !!}</td>
                                        <td>{{ $answer->check === 1 ? 'Đáp án đúng' : 'Đáp án sai' }}</td>
                                        <td>{{ $answer->status === 1 ? 'Đã kích hoạt' : 'Chưa kích hoạt' }}</td>
                                        <td>{!! $answer->created_at !!}</td>
                                        <td>
                                            <form id="form-{{ $answer->id }}" action="/admin/answers/{{ $answer->id }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                            </form>
                                            <input onclick="confirm_delete({{ $answer->id }});" type="button" class="btn btn-danger pull-right" value="Delete">
                                            <a target="_blank" href="/admin/answers/{{ $answer->id }}/edit" title="Edit" class="btn btn-sm btn-primary pull-right edit">
                                                <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
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

