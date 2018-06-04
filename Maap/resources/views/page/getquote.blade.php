@extends('master') @section('content')
<div class="container-fluid page-content getquote">
    @if(Session::has('lienhe'))
    <div class="alert alert-success">
        {{Session::get('lienhe')}}
    </div>
    @endif
    <div class="row h-100">
        <div class="main w-100">
            <div class="d-flex flex-column flex-wrap flexs">
                <div class="d-flex flex-row align-items-center justify-content-center h-100">
                    <div class="col-md-8 bg-white">
                        <form class="p-3" action="{{route('lienhe')}}" method="post">
                        {{csrf_field()}}
                            <h3 class="text-center">GET QUOTES</h3>
                            <div class="card-deck">
                                <div class="card text-white bg-success">
                                    <div class="card-header">INFOMATION</div>
                                    <div class="card-body">
                                        <h6 class="card-text">Melbourne Architecture And Partners</h6>
                                        <h6 class="card-text">Website: www.maap.com.au</h6>
                                        <h6 class="card-text">Email: projects@maap.com.au</h6>
                                        <h6 class="card-text">Phone: 0435 285 970</h6>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="6" name="message" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection