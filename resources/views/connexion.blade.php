

@extends("layouts.master")


@section("contenu")



<div class="m-5 p-3 bg-body rounded shadow-sm">

    <h3 class="border-bottom pb-2 mb-4">Connexion</h3>

     @if (session()->has('success'))
         <div class="alert alert-success">
            <h4>{{ session()->get('success') }}</h4>
         </div>
     @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul></div>

    @endif
<div class="mt-4 mb-4" style="margin-left: 10%">

    <form style="width: 65%; border-radius:15px;border:1px solid antiquewhite " class="p-4 shadow-sm" method="POST" action="{{ route('user.login') }}">

        @csrf

               <div class="mb-3">
            <label for="mail" class="form-label">Email</label>
           <input type="mail" class="form-control" name="email" id="mail">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
           <input type="password" class="form-control" name="password" id="password">
        </div>


        <button type="submit" class="btn bg-blue">Se Connecter</button>
        <a href="{{ route('accueil') }}" class="btn btn-danger bg-blue">Annuler</a>
      </form>
</div>

</div>

@endsection
