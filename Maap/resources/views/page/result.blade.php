@extends('master') @section('content')
<div class="container-fluid page-content result">
    <div class="row h-100">
        <div class="col-md-8 p-0">
            <div class="d-flex flex-column flex-wrap flexs">
                <div class="d-flex flex-row align-items-center flexs-row">
                    <div class="d-flex align-items-center justify-content-center flexs-item h-100 choose">Q1 A1</div>
                    <div class="d-flex align-items-center justify-content-center flexs-item h-100">Q1 A2</div>
                    <div class="d-flex align-items-center justify-content-center flexs-item h-100">Q1 A3</div>
                </div>
                <div class="d-flex flex-row align-items-center flexs-row">
                    <div class="d-flex align-items-center justify-content-center flexs-item h-100">Q2 A1</div>
                    <div class="d-flex align-items-center justify-content-center flexs-item h-100 choose">Q2 A2</div>
                    <div class="d-flex align-items-center justify-content-center flexs-item h-100">Q2 A3</div>
                </div>
                <div class="d-flex flex-row align-items-center flexs-row">
                    <div class="d-flex align-items-center justify-content-center flexs-item h-100">Q3 A1</div>
                    <div class="d-flex align-items-center justify-content-center flexs-item h-100">Q3 A2</div>
                    <div class="d-flex align-items-center justify-content-center flexs-item h-100 choose">Q3 A3</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection