@extends('public')

@section('title', 'chisiamo')

@section('content')

<div style="height: 1000px; margin-top: -50px; background-image: url({{asset('images/image11.jpeg')}})" class="bg-image">
    
    
    <center>
    
    
    <div class="card" style="max-width: 800px; height: 800px; margin-top: 5%; background-color: rgba(100,100,100, 0.5); margin-left: 100px; box-shadow: 0 2px 40px 0 rgba(100, 100, 100, .25), 0 3px 50px 40px rgba(100, 100, 100, 0.2) !important;"">
    <div class="card-body" style="max-width: 800px; margin-top: 80px; margin: 5%;">
     
        <h1 style=" font-size: 50px; color: White">Chi Siamo</h1><br>
        <p style="color: white;" class="display-6">
            È un popolare sito web di social network ad accesso gratuito, dove si può pubblicare post e cercare nuove amicizie. Infatti quando ci si iscrive si possono richiedere nuove amicizie agli utenti presenti nel sito e accettare richieste da altri. Il sito permette di gestire la propria rete sociale e la prova identità. L'utente può costruire un proprio profilo accessibile e tutti gli utenti, dando la possibilità, dando la possibilità a una lista predefinita di entrare in contatto e comunicare con un'apposita chat. 
        </p>

    
        
    </div>
</div>
        
    </center>
    
   
 
    
</div>


@include('layouts/blackbar')



@endsection

