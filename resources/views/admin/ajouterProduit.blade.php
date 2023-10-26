


<!DOCTYPE html>
<html lang="en">

<head>

   @include('admin.css')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
@include('admin.sidebare')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar    le navbar-->
                
                 @include('admin.navbar')   
                <!-- End of Topbar -->
                <div class="container">
             

<div class="container">
    <h1>Ajouter un Nouveau utilisateur</h1>
    @if(session('success'))
<div class="alert alert-success">
        {{session('success')}}
</div>

@endif
</div>
<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block"><img src="assets\img\blog\blog-1.jpg" width="100%" height="100%" alt=""></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">creer un compte user!</h1>
                    </div>
                 
    


    <!-- Votre contenu ici -->
    <x-guest-layout>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Prenom & Nom')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Address -->
    <div class="mt-4">
        <x-input-label for="adresse" :value="__('Adresse')" />
        <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autocomplete="adresse" />
        
    </div>
    <!-- Telephone --> <div class="mt-4">
        <x-input-label for="telephone" :value="__('Téléphone')" />
        <x-text-input id="telephone" class="block mt-1 w-full" type="number" name="telephone" :value="old('telephone')" required autocomplete="telephone" />
        
    </div>



    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Mots de passe')" />

        <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirmer votre mots de passe')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
            {{ __('Déjà inscrit?') }}
        </a>

        <x-primary-button class="ml-4">
            {{ __('Enregistrer') }}
            
        </x-primary-button>
        
        <x-danger-button class="ml-4">
        <a href="/">Retourner</a>
            
            
        </x-danger-button>

    </div>
</form>
</div>
</x-guest-layout>

<hr>
                    <div class="text-center">
                        <a class="small" href="forgot-password.html">Mot de passe oublier?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="login.html">Compte existe deja? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</div>



                <!-- Begin Page Content -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    
@include('admin.script')
</body>

</html>