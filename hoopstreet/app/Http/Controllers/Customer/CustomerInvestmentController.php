<?php

namespace App\Http\Controllers\Customer;
use Auth;
use App\Http\Requests\Admin\StoreAbilitiesRequest;
use App\Http\Requests\Admin\UpdateAbilitiesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Investment;
use App\User;
class CustomerInvestmentController extends Controller
{
    /**
     * Display a listing of Investment.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('is_customer')) {
            return abort(401);
        }

        $id = Auth::user()->getId();
        $investments = Investment::where('user_id',$id)->get();
        $user = User::where('id',$id)->get();

        return view('customer.investment.index', compact('investments','user'));
    }

    /**
     * Show the form for creating new Ability.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('is_customer')) {
            return abort(401);
        }
        return view('customer.investment.create');
    }

    /**
     * Store a newly created Ability in storage.
     *
     * @param  \App\Http\Requests\StoreAbilitiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('is_customer')) {
            return abort(401);
        }
        Investment::create($request->all());

        return redirect()->route('customer.investment.index');
    }


    /**
     * Show the form for editing Ability.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $ability = Investment::findOrFail($id);

        return view('admin.abilities.edit', compact('ability'));
    }

    /**
     * Update Ability in storage.
     *
     * @param  \App\Http\Requests\UpdateAbilitiesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAbilitiesRequest $request, $id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $ability = Investment::findOrFail($id);
        $ability->update($request->all());

        return redirect()->route('admin.abilities.index');
    }

    public function show(Investment $investment)
    {
        if (! Gate::allows('is_customer')) {
            return abort(401);
        }

        $id = Auth::user()->getId();
        $user = User::where('id',$id)->get();
        return view('customer.investment.show', compact('investment','user'));
    }

    /**
     * Remove Ability from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $ability = Ability::findOrFail($id);
        $ability->delete();

        return redirect()->route('admin.abilities.index');
    }

    /**
     * Delete all selected Ability at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        Ability::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
