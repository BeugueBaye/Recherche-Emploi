@extends('layouts.app')

@section('content')



<strong> <h2 class="text-2xl text-blue-500 mb-5">Vous soumettez une proposition pour la mission "{{ $jobId->titre }}"</h2> </strong>
<form method="POST" action="{{ route('proposals.submit.store', $jobId) }}" class="w-full max-w-md"  class="border 3px" name="coverLetter">



              <div class="col-3 m-3" >
                <div class="form-outline">
                    <input type="text" placeholder="Nom" id="form3Example1" class="form-control"
                     name="nom" value="">
                </div>
                </div>
           
                <div class="col-3 m-3">
                <div class="form-outline">
                    <input type="text" placeholder="Prenom" id="form3Example1" class="form-control"
                     name="prenom" value="">
                </div>
                </div>

                

                <div class="col-3 m-3">
                <div class="form-outline">
                    <input type="text" placeholder="Adresse" id="form3Example1" class="form-control"
                     name="adresse" value="">
                </div>
                </div>

                <div class="col-3 m-3">
                <div class="form-outline">
                    <input type="texte" placeholder="Email" id="form3Example1" class="form-control"
                     name="email" value="">
                </div>
                </div>


                  <div  class="col-3 m-3; pl-10">
                <div class="form-outline">
                    <input type="text" placeholder="Telephone" id="form3Example1" class="form-control"
                     name="telephone" value="">
                </div>
                </div>

                 <div  class="col-3 m-3">
                <div class="form-outline">
                    <input type="text" placeholder="Niveau D'étude" id="form3Example1" class="form-control"
                     name="etude" value="">
                </div>
                </div>


                 <div class="col-3 m-3; mb-8">
                <div class="form-outline">
                    <input type="string" placeholder="Expérience professionnelle" id="form3Example1" class="form-control"
                     name="experience" value="">
                </div>
                </div>
  

  @csrf
  <h3 class="text-green-700">Lettre de motivation</h3>
  <textarea name="coverLetter"  class="border w-full rounded block py-2 px-3"></textarea>
  @error('coverLetter')
    <span class="text-red-400 text-sm">{{ $message }}</span>
  @enderror
  <button type="submit" class="bg-blue-500 text-white hover:bg-white-700 transition ease-in-out duration-500 rounded-md shadow-md w-full block px-4 py-2 mt-3">Envoyez ma candidature</button>
</form>

 

    
      

@endsection