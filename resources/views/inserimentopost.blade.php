@extends('public')

@section('title', 'Register')

@section('content')

<div style="height: 900px; margin-top: -50px; background-image: url({{asset('images/images6.jpeg')}})" class="bg-image d-flex justify-content-center">
    
    
    <div class="card" style="max-width: 800px; height: 550px; background-color: rgba(100,100,100, 0.6); margin-left: 100px; margin-top: 10%; box-shadow: 0 2px 40px 0 rgba(100, 100, 100, .25), 0 3px 50px 40px rgba(100, 100, 100, 0.2) !important;"">
    <div class="card-body" style="max-width: 800px; margin-top: 80px; margin: 5%;">
        
    
        <div class="d-flex justify-content-center" style="margin-bottom: 3%; margin-top:-5%;">
            <h5 style="color: white;">Inserisci Post</h5>
        </div>
    

{{Form::open(array('route' => 'inserimentopost'))}}


<div class="container">
  

     
      
    {{Form::textarea('Descrizione', 'Descrizione', ['class' => 'form-control' , 'id' => 'Descrizione' ])}}

    
    <label class="form-label" for="customFile" style="margin-top: 5%; color: white;">Inserisci Immagine</label>
        <input type="file" class="form-control" id="customFile" />

    
        
</div>


        <div class=" d-flex justify-content-center" style="margin-top: 3%;">
        <button type="button" class="btn btn-light" data-mdb-ripple-color="dark">Inserisci</button>
        </div>
        

        
    </div>
</div>
    
    
    
    
    
    
</div>







@include('layouts/blackbar')  



@endsection
