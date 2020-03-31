@extends('bank.main')
@section('content')

    <div class="site-section bg-light">
        <div class="container">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/store-transfer" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-7 mb-5">

                        <h2 class="mb-5 text-black">Perveskite pinigus</h2>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">Vardas</label>
                                <input type="text" id="subject" name="name" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">Pavarde</label>
                                <input type="text" id="subject" name="lastName" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Pasirinkite saskaita</label>

                                <select class="form-control" name="your_account">
                                    @foreach($accounts as $account)
                                        @can('home', $account)
                                    <option>{{$account->number}}</option>
                                        @endcan
                                    @endforeach
                                </select>

                            </div>

                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">Gavejo banko saskaita</label>
                                <input type="text" id="subject" name="account" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Pervedama suma</label>
                                <input type="number"  min="0" max="100" value="" id="subject" name="amount" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Statusas</label>
                                <select class="form-control" name="status">
                                    <option>Naujas</option>
                                    <option>Vykdomas</option>
                                    <option>Baigtas</option>
                                </select>
                            </div>
                        </div>

                        <input type="hidden" name="payer_id" value="{{ Auth::user()->id }}">

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Pridėti" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>


                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
