@extends('voyager::master')
@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-browser"></i> Bình luận
        </h1>
    </div>
@stop
@section('content')
<script>
    
</script>
<div class="page-content browse container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="panel-body">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            {{ $comment->content }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

