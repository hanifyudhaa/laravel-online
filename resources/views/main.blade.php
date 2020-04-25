<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome To @yield("title") Online Class</title>
    <link rel="shortcut icon" href="{{asset("assets/images/favicon.ico")}}">
    <link rel="stylesheet" href="">

    @yield("css")

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="{{asset("assets/css/icons.css")}}" rel="stylesheet" type="text/css">

</head>
<body>
@include("partial.header")

{{--Content--}}

<div class="content-page">
    <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title ml-2 mt-3 mb-2">
                        <h3 class="pull-left page-title">@yield("title")</h3>
                        <div class="clearfix"></div>
                    </div>

                    @if(session("pesan"))
                        <div class="alert alert-danger alert-{{session('code')}} alert-dismissable fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                            {{session("pesan")}}
                        </div>
                    @endif
                </div>
            </div>

            @yield("content")

        </div>
    </div>
</div>


<!-- jQuery  -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="{{asset("laravel.js")}}" type="text/javascript"></script>


</body>
</html>
