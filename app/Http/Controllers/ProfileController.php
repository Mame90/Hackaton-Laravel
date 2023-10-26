<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Contact;
use App\Models\Produit;
use App\Models\Commande;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

public function redirect(){
    $role=Auth::user()->role;
}

    // public function adiministrateur(){
    //     return view('profile.admin_master');
    // }
    public function vieAdmin()
    {
        return view('admin.dashboard'); // Afficher le tableau de bord de l'administrateur
    }
    // methode pour la partie contact **************
    public function contact()
    {
        return view('contact'); // Afficher le tableau de bord de l'administrateur
    }
    public function utilisateursAvecCommandes()
{
    $utilisateursAvecCommandes = User::has('commandes')->get();
    return view('commandes.index', ['utilisateursAvecCommandes' => $utilisateursAvecCommandes]);
}

}