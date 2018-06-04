@extends('master') @section('content')
<div class="container-fluid page-content getstart">
    <div class="row h-100">
        <div id="dotNav">
            <ul>
                <li title="Q1" class="active">
                    <a href="#q1"></a>
                </li>
                <li title="Q2">
                    <a href="#q2"></a>
                </li>
                <li title="Q3">
                    <a href="#q3"></a>
                </li>
                <li title="Submit">
                    <a href="#submit"></a>
                </li>
            </ul>
        </div>
        <div id="butNav" class="d-flex flex-row justify-content-center">
            <span>
                <a href="#" class="prev">&#9664;</a>
            </span>
            <span>
                <a href="#" class="stop">&#9632;</a>
            </span>
            <span>
                <a href="#" class="next">&#9654;</a>
            </span>
        </div>
        <div class="col-md-8">
            <form class="h-100 w-100" action="{{route('result')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
                <section class="h-100" id="q1">
                    <div class="d-flex flex-column flex-wrap flexs">
                        <div class="d-flex flex-row align-items-center flexs-row">
                            <div class="d-flex justify-content-center flexs-item h-100"></div>
                            <div class="d-flex justify-content-center flexs-item h-100">
                                <label class="d-flex align-items-center justify-content-center h-100 w-100 labelopts" for="q1op1">
                                    <span>Invester</span>
                                    <input type="radio" id="q1op1" name="q1" value="invester" />
                                    <span class="d-flex align-items-center justify-content-center checkmark" value="Invester"></span>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center flexs-item h-100"></div>
                        </div>
                        <div class="d-flex flex-row align-items-center flexs-row">
                            <div class="d-flex justify-content-center flexs-item h-100"></div>
                            <div class="d-flex justify-content-center flexs-item h-100">
                                <label class="d-flex align-items-center justify-content-center qcir">
                                    <span>Who
                                        <br />are you</span>
                                </label>

                            </div>
                            <div class="d-flex justify-content-center flexs-item h-100"></div>
                        </div>
                        <div class="d-flex flex-row align-items-center flexs-row">
                            <div class="d-flex justify-content-center flexs-item h-100">
                                <label class="d-flex align-items-center justify-content-center h-100 w-100 labelopts" for="q1op2">
                                    <span>Architector Firm</span>
                                    <input type="radio" id="q1op2" name="q1" value="architector" />
                                    <span class="d-flex align-items-center justify-content-center checkmark" value="Architector Firm"></span>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center flexs-item h-100"></div>
                            <div class="d-flex justify-content-center flexs-item h-100">
                                <label class="d-flex align-items-center justify-content-center h-100 w-100 labelopts" for="q1op3">
                                    <span>Bussiness Owner</span>
                                    <input type="radio" id="q1op3" name="q1" value="bussiness" />
                                    <span class="d-flex align-items-center justify-content-center checkmark" value="Bussiness
												Owner"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="h-100" id="q2">
                    <div class="d-flex flex-column flex-wrap flexs">
                        <div class="d-flex flex-row align-items-center flexs-row">
                            <div class="d-flex justify-content-center flexs-item h-100"></div>
                            <div class="d-flex justify-content-center flexs-item h-100">
                                <label class="d-flex align-items-center justify-content-center h-100 w-100 labelopts" for="q2op1">
                                    <span>Answer 1</span>
                                    <input type="radio" id="q2op1" name="q2" value="invester" />
                                    <span class="d-flex align-items-center justify-content-center checkmark" value="Answer 1"></span>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center flexs-item h-100"></div>
                        </div>
                        <div class="d-flex flex-row align-items-center flexs-row">
                            <div class="d-flex justify-content-center flexs-item h-100">
                                <label class="d-flex align-items-center justify-content-center h-100 w-100 labelopts" for="q2op4">
                                    <span>Answer 4</span>
                                    <input type="radio" id="q2op4" name="q2" value="architector" />
                                    <span class="d-flex align-items-center justify-content-center checkmark" value="Answer 4"></span>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center flexs-item h-100">
                                <label class="d-flex align-items-center justify-content-center qcir">
                                    <span>Question 2</span>
                                </label>

                            </div>
                            <div class="d-flex justify-content-center flexs-item h-100">
                                <label class="d-flex align-items-center justify-content-center h-100 w-100 labelopts" for="q2op2">
                                    <span>Answer 2</span>
                                    <input type="radio" id="q2op2" name="q2" value="architector" />
                                    <span class="d-flex align-items-center justify-content-center checkmark" value="Answer 2"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center flexs-row">
                            <div class="d-flex justify-content-center flexs-item h-100"></div>
                            <div class="d-flex justify-content-center flexs-item h-100">
                                <label class="d-flex align-items-center justify-content-center h-100 w-100 labelopts" for="q2op3">
                                    <span>Answer 3</span>
                                    <input type="radio" id="q2op3" name="q2" value="architector" />
                                    <span class="d-flex align-items-center justify-content-center checkmark" value="Answer 3"></span>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center flexs-item h-100"></div>
                        </div>
                    </div>
                </section>
                <section class="h-100" id="q3">
                    <div class="d-flex flex-column flex-wrap flexs">
                        <div class="d-flex flex-row align-items-center flexs-row">
                            <div class="d-flex justify-content-center flexs-item h-100">
                                <label class="d-flex align-items-center justify-content-center h-100 w-100 labelopts" for="q3op1">
                                    <span>Answer 1</span>
                                    <input type="radio" id="q3op1" name="q3" value="architector" />
                                    <span class="d-flex align-items-center justify-content-center checkmark" value="Answer 1"></span>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center flexs-item h-100"></div>
                            <div class="d-flex justify-content-center flexs-item h-100">
                                <label class="d-flex align-items-center justify-content-center h-100 w-100 labelopts" for="q3op2">
                                    <span>Answer 2</span>
                                    <input type="radio" id="q3op2" name="q3" value="architector" />
                                    <span class="d-flex align-items-center justify-content-center checkmark" value="Answer 2"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center flexs-row">
                            <div class="d-flex justify-content-center flexs-item h-100"></div>
                            <div class="d-flex justify-content-center flexs-item h-100">
                                <label class="d-flex align-items-center justify-content-center qcir">
                                    <span>Question 3</span>
                                </label>

                            </div>
                            <div class="d-flex justify-content-center flexs-item h-100"></div>
                        </div>
                        <div class="d-flex flex-row align-items-center flexs-row">
                            <div class="d-flex justify-content-center flexs-item h-100">
                                <label class="d-flex align-items-center justify-content-center h-100 w-100 labelopts" for="q3op3">
                                    <span>Answer 3</span>
                                    <input type="radio" id="q3op3" name="q3" value="architector" />
                                    <span class="d-flex align-items-center justify-content-center checkmark" value="Answer 3"></span>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center flexs-item h-100"></div>
                            <div class="d-flex justify-content-center flexs-item h-100">
                                <label class="d-flex align-items-center justify-content-center h-100 w-100 labelopts" for="q3op4">
                                    <span>Answer 4</span>
                                    <input type="radio" id="q3op4" name="q3" value="bussiness" />
                                    <span class="d-flex align-items-center justify-content-center checkmark" value="Answer 4"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="h-100" id="submit">
                    <div class="d-flex flex-column flex-wrap flexs">
                        <div class="d-flex flex-row align-items-center justify-content-center h-100">
                            <div class="col-md-8">
                                <div class="form-field">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Your Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputAdd" placeholder="Your Address" name="address" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-3 col-form-label">Your Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Your Email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputMobile" class="col-sm-3 col-form-label">Your Mobile</label>
                                        <div class="col-sm-9">
                                            <input type="tel" class="form-control" id="inputMobile" placeholder="Your Mobile" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-black">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
</div>
@endsection