<?php

namespace App\Http\Controllers\Admin;

use App\Investment;
use Silber\Bouncer\Database\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUsersRequest;
use App\Http\Requests\Admin\UpdateUsersRequest;

use App\User;

class InvestmentController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
            //sreturn Investment::all();
       //       $id = Auth::user()->getId();
       //  $investments = Investment::where('user_id',$id)->get();
       //  $user = User::where('id',$id)->get();
        $data = Investment::join('users', 'users.id', '=', 'investments.user_id')
       ->select('users.*', 'investments.*')
       ->get();
       //return $data;

       return view('admin.investment.index', compact('data'));
       // return view('admin.test.test');
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $roles = Role::get()->pluck('name', 'name');

        return view('admin.investment.create', compact('roles'));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsersRequest $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $user = Investment::create($request->all());

        // foreach ($request->input('roles') as $role) {
        //     $user->assign($role);
        // }

        return redirect()->route('admin.users.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        //$roles = Role::get()->pluck('name', 'name');

        $investment = Investment::findOrFail($id);

        return view('admin.users.edit', compact('investment'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersRequest $request, $id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $investment = Investment::findOrFail($id);
        $user->update($request->all());
        // foreach ($user->roles as $role) {
        //     $user->retract($role);
        // }
        // foreach ($request->input('roles') as $role) {
        //     $user->assign($role);
        // }

        return redirect()->route('admin.investment.index');
    }


public function viewcustomerinvestment($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
            //sreturn Investment::all();
       //       $id = Auth::user()->getId();
        $investments = Investment::where('user_id',$id)->get();
        $user = User::where('id',$id)->get();
       //  $data = User::join('investments', 'users.id', '=', $id)
       // ->select('users.*', 'investments.*')
       // ->get();
       //return $data;

       return view('admin.investment.customerinvestment', compact('investments','user'));
       // return view('admin.test.test');
    }


public function paid($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        // $investment = Investment::findOrFail($id);
        // $investment->update($request->all());
        Investment::where('id', $id)
              ->update(['payment_status' => 1,'investment_status' => 1, 'payment_source'  => 'Bank']);
        // foreach ($user->roles as $role) {
        //     $user->retract($role);
        // }
        // foreach ($request->input('roles') as $role) {
        //     $user->assign($role);
        // }

        return redirect()->route('admin.investment.index');
    }
    public function show(Investment $investment)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

       $id = $investment->user_id;
        $user = User::where('id',$id)->get();
        return view('admin.investment.show', compact('investment','user'));

        //return view('admin.users.show', compact('user'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $investment = Investment::findOrFail($id);
        $investment->delete();

        return redirect()->route('admin.investment.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        User::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
