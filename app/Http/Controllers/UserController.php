<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Laravel\Cashier\Cashier;
use App\Models\User;
use Illuminate\Support\Str;
use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::query()
                ->with('seller')
                ->get();

        //dd($users);

        return Inertia::render('dashboard/users/Index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Inertia::render('dashboard/users/Show', [
            'user' => User::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->with('profile')->first();

        dd($user);

        return Inertia::render('users/AccountInformation', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->all());
        $user = User::find($id);

        $user->update($request->all());

        if ($request->file('avatar')) {
            $this->deleteAvatar($user->profile->avatar);
            $user->profile->update($request->all());
            $user->profile->avatar = $this->saveAvatar($request);
        } else {
            if ($request->avatar == null) {
                $this->deleteAvatar($user->profile->avatar);
                $request->replace(['avatar' => 'default.jpg']);
                $user->profile->update($request->all());
            } else {
                $user->profile->update($request->all());
            }
        }

        return back();
        // return back()->json(['success' => 'Datos actualizados']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        return $user->delete();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editAccountInformation()
    {
        // En la vista se se toma la variable del usuario autenticado
        return Inertia::render('users/AccountInformation');
    }

    /**
     * Muestra la vista de las compras del usuario autenticado.
     *
     */
    public function myShopping()
    {
        $buys = auth()->user()->buys;

        return Inertia::render('Account/MyShopping', [
            'buys' => $buys
        ]);
    }


    public function saveAvatar(Request $request)
    {
        $originalImage = $request->file('avatar');
        $image = Image::make($originalImage);
        $originalPath = public_path('avatars');
        //Nombre aleatorio para la image
        $tempName = Str::random(10) . '.' . $originalImage->getClientOriginalExtension();

        //Redimensinoar la imagen
        if ($image->width() >= $image->height()) {
            $image->heighten(400);
        } else {
            $image->widen(400);
        }

        $image->resizeCanvas(400, 400);

        $image->save($originalPath.$tempName);

        return $tempName;
    }

    public function deleteAvatar($avatar)
    {
        $originalPath = public_path('avatars');

        if ($avatar != 'default.jpg') {
            if (\File::exists($originalPath.$avatar)) {
                \File::delete($originalPath.$avatar);
            }
        }
    }
}
