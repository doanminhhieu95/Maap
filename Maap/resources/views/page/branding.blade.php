@extends('master') @section('content')
<div class="container-fluid page-content branding">
    <div class="row h-100">
        <div class="main w-100">
            <div class="d-flex flex-column flex-wrap flexs">
                <div class="d-flex flex-row align-items-center content">
                    <div class="col-md-2 text-center h-100 d-none d-md-block">
                        <div class="img-pops h-100">
                            <div class="img-pop">
                                <img src="maaptl/img/top3.png" />
                            </div>
                            <div class="img-pop">
                                <img src="maaptl/img/1ST.png" />
                            </div>
                            <div class="img-pop">
                                <img src="maaptl/img/7DAYS.png" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 h-100 bg-white p-0 middle">
                        <div class="row bg-map h-100">
                            <img src="maaptl/img/map.png" class="img-fluid rounded h-100 w-100" />
                            <div id="demo5" class="col-12 scroll-img full top">
                                <ul class="h-100">
                                @foreach($hinhanh1 as $hinhanh)
                                    <li class="h-100">
                                        <img class="h-100" src="maaptl/img/{{$hinhanh->name}}" />
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="demo6" class="col-12 scroll-img full bot">
                                <ul class="h-100">
                                @foreach($hinhanh2 as $hinhanh)
                                    <li class="h-100">
                                        <img class="h-100" src="maaptl/img/{{$hinhanh->name}}" />
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 h-100 text-center d-none d-md-block">
                        <div class="img-counts h-100">
                            <div class="img-count">
                                <!--<span class="counter">90</span>-->
                                <img src="maaptl/img/90projects.png" />
                            </div>
                            <div class="img-count">
                                <!--<span class="counter">90</span>-->
                                <img src="maaptl/img/100satisfaction.png" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center justify-content-center footer">
                    <div class="d-flex flex-row align-items-center justify-content-center">
                        <a class="" href="{{route('getstart')}}">
                            <strong>GET START</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection