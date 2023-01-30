@extends('public')

@section('title', 'Modifica_Profilo')

@section('content')

<div style="height: 900px; margin-top: -50px; background-image: url({{asset('images/images6.jpeg')}})" class="bg-image"></div>

<div class="card" style="max-width: 800px; height: 550px; margin-top: -40%; background-color: rgba(100,100,100, 0.6); margin-left: 100px; box-shadow: 0 2px 40px 0 rgba(100, 100, 100, .25), 0 3px 50px 40px rgba(100, 100, 100, 0.2) !important;"">
    <div class="card-body" style="max-width: 800px; margin-top: 80px; margin: 5%;">
        
    
        <div class="d-flex justify-content-center" style="margin-bottom: 3%; margin-top:-5%;">
            <h5 style="color: white;">Modifica il tuo profilo</h5>
        </div>
    




<div class="container">
  <div class="row">
    <div class="col-md">
       <div class="input-group mb-3">

  <input
    type="text"
    class="form-control"
    placeholder="Joshua"
    aria-label="Nome"
    aria-describedby="basic-addon1"
  />
</div>
        
    </div>
    <div class="col-md">
         <div class="input-group mb-3">

  <input
    type="text"
    class="form-control"
    placeholder="Ciccolini"
    aria-label="Cognome"
    aria-describedby="basic-addon1"
  />
</div>
    </div>

  </div>
    
    
   <div class="input-group mb-3">

  <input
    type="date"
    class="form-control"
    placeholder="27/11/2000
    aria-label="Data di Nascita"
    aria-describedby="basic-addon1"
  />
</div>
    
     <div class="input-group mb-3">

  <input
    type="text"
    class="form-control"
    placeholder="Montegiorgio"
    aria-label="Luogo di Nascita"
    aria-describedby="basic-addon1"
  />
</div>
    
    <div class="input-group mb-3">

  <input
    type="text"
    class="form-control"
    placeholder="Via Galileo Galilei 8"
    aria-label="Indirizzo"
    aria-describedby="basic-addon1"
  />
</div>
    
    
    <div class="imput-group mb-3">
        <textarea class="form-control" id="textAreaExample" rows="4" placeholder="Descrizione"></textarea>
  
</div>
    
    
    <div class="container">
  <div class="row">
    <div class="col-md">
        <h6 style="color: white;">Vuoi dare il consenso ai tuoi amici di leggere il tuo blog?</h6>
    </div>
    <div class="col-md">
      <div class="btn-group">
  <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked />
  <label class="btn btn-secondary" for="option1">Consenti</label>

  <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" />
  <label class="btn btn-secondary" for="option2">Non Consentire</label>

</div>
    </div>
  </div>
</div>
    
        
</div>


        <div class=" d-flex justify-content-center" style="margin-top: 3%;">
            
            <!-- quando viene cliccato annulla bisogna ritornare sulla pagina profilo dell'utente -->
            
            <form action="{{route('profiloutente')}}" method="GET"  style="margin-right: 5%;">
                <button type="submit" class="btn btn-dark" data-mdb-ripple-color="dark">Annulla</button>
            </form>
            
        <button type="button" class="btn btn-light" data-mdb-ripple-color="dark">Conferma</button>
        </div>
        

        
    </div>
</div>

<div class="d-flex justify-content-end" style="margin-right: 150px; margin-top: -30%; margin-bottom: 20%;">
    <img src="{{asset('images/image14.png')}}" style="position: relative; max-width: 35%;">
</div>



@include('layouts/blackbar')  



@endsection

