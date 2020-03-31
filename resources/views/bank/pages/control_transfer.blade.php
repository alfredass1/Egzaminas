@extends('bank.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-2">
                <table class="table">
                    <thead class="thead-light">

                    <tr>
                        <th scope="col">Gavejo vardas</th>
                        <th scope="col">Gavejo pavarde</th>
                        <th scope="col">Gavejo saskaita</th>
                        <th scope="col">Suma</th>
                        <th scope="col">Statusas</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($operations as $operation)
                        <tr>
                            <td>{{$operation->receiver_name}}  </td>
                            <td>{{$operation->receiver_lastName}}</td>
                            <td>{{$operation->nr_account}}</td>
                            <td>{{$operation->amount}}</td>
                            <td>{{$operation->status}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <br>
            </div>
        </div>
    </div>
@endsection
