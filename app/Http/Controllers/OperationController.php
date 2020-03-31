<?php

namespace App\Http\Controllers;

use App\Account;
use App\Operation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OperationController extends Controller
{
    public function makeTransfer(Operation $operation )
    {
        $accounts = Account::all();
        $operations = Operation::all();

        return view('bank.pages.transfer', compact('accounts', 'operations'));
    }


    public function storeTransfer(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required',
            'lastName' => 'required',
            'account' => 'required',
            'amount' => 'required',
            'status' => 'required',

        ]);


        $operations = Operation::create([
            'receiver_name' => request('name'), //name
            'receiver_lastName' => request('lastName'),
            'nr_account' => request('account'),
            'amount' => request('amount'),
            'status' => request('status'),
            'payer_id' => request('payer_id'),
            'your_account' => request('your_account')
        ]);

        return redirect('control_transfer');
    }

    public function ShowTransfers()
    {
        $operations = Operation::all();
        $accounts = Account::all();
        return view('bank.pages.control_transfer', compact('operations','accounts'));
    }


}
