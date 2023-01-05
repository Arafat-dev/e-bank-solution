@extends("layouts.master")


@section("contenu")


<div class="d-flex align-items-center p-3 my-3 text-white bg-blue rounded shadow-sm">

    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1"> Formulaire D'inscription</h1>

    </div>

</div>


<div class="my-3 p-3 bg-body rounded shadow-sm">

    <h3 class="border-bottom pb-2 mb-4">Inscription</h3>

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

    <form style="width: 65%; border-radius:15px;border:1px solid antiquewhite " class="p-4 shadow-sm" method="POST" action="{{ route('user.register') }}">

        @csrf

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nom</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nom">

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Prenom</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="prenom">
        </div>

        <div class="mb-3">
            <label for="date_n" class="form-label">Date Naissance</label>
           <input type="date" class="form-control" name="date_naissance" id="date_n">
        </div>


        <div class="mb-3">
            <label for="cni" class="form-label">Numero CNI</label>
           <input type="text" class="form-control" name="cni" id="cni">
        </div>


        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
           <input type="text" class="form-control" name="adresse" id="adresse">
        </div>



        <div class="mb-3">
            <label for="tel" class="form-label">Telephone</label>
           <input type="text" class="form-control" name="telephone" id="tel">
        </div>





        <div class="mb-3">
            <label for="mail" class="form-label">Email</label>
           <input type="mail" class="form-control" name="email" id="mail">
        </div>






        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
           <input type="password" class="form-control" name="password" id="password">
        </div>


        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('accueil') }}" class="btn btn-danger">Annuler</a>
      </form>
</div>

</div>

@endsection
