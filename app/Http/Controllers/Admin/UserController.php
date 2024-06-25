<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ImageUpload;
use DataTables;

class UserController extends AdminController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = User::select('*');
            return Datatables::of($data)
               
                ->addIndexColumn()
               
                ->addColumn('action', function($row){
   
                    $btn = '<a href="'. route('users.edit', $row->id) .'" class="edit btn btn-success btn-sm p-0 " ><i class="fa fa-pencil" style="padding:9px" aria-hidden="true"></i></a>';
                    $btn = $btn. '<form action="'. route('users.destroy', $row->id) .'" method="POST" class="d-inline">
                        '. method_field('DELETE') . csrf_field() .'
                        <button type="submit" class="btn btn-danger btn-sm delete_crud p-0">
                            <i class="fa fa-trash" style="padding:9px" aria-hidden="true"></i>
                        </button>
                    </form>';

                    return $btn;
                })

                ->addColumn('created_at',function($row){
                    return dynamicDateFormat($row->created_at, 6);
                })

                ->rawColumns(['action', 'created_at'])
                ->make(true);
        }
        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required',
            'confirm_password' => 'required_with:password|same:password',
        ]);

        $input['password'] = bcrypt($input['password']);
        
        $user = User::create($input);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'. $user->id,
            'confirm_password' => 'required_with:password|same:password',
        ]);

        if (!empty($request['password'])) {
            $input['password'] = bcrypt($request->input('password'));
        }
        else {
            $input['password'] = $user->password;
        }
        
        $user->update($input);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back();
    }
}
