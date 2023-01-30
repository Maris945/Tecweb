@extends('public')

@section('title', 'DoveSiamo')

@section('content')

<div style="height: 1000px; margin-top: -50px; background-image: url({{asset('images/image10.jpeg')}})" class="bg-image">
    
    
    <center>
    
    
    <div class="card" style="max-width: 800px; height: 800px; margin-top: 5%; background-color: rgba(100,100,100, 0.5); margin-left: 100px; box-shadow: 0 2px 40px 0 rgba(100, 100, 100, .25), 0 3px 50px 40px rgba(100, 100, 100, 0.2) !important;"">
    <div class="card-body" style="max-width: 800px; margin-top: 80px; margin: 5%;">
     
        <h1 style=" font-size: 50px; color: White">Dove Siamo</h1><br>
        <iframe  style="position: relative;"width="638" height="525" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.it/maps?f=q&amp;source=s_q&amp;hl=it&amp;geocode=&amp;q=Via+Brecce+Bianche,+12,+Ancona&amp;aq=0&amp;sll=41.442726,12.392578&amp;sspn=23.377375,53.657227&amp;ie=UTF8&amp;hq=&amp;hnear=Via+Brecce+Bianche,+12,+60131+Ancona,+Marche&amp;z=14&amp;ll=43.581248,13.515684&amp;output=embed"></iframe><br /><small><a href="http://maps.google.it/maps?f=q&amp;source=embed&amp;hl=it&amp;geocode=&amp;q=Via+Brecce+Bianche,+12,+Ancona&amp;aq=0&amp;sll=41.442726,12.392578&amp;sspn=23.377375,53.657227&amp;ie=UTF8&amp;hq=&amp;hnear=Via+Brecce+Bianche,+12,+60131+Ancona,+Marche&amp;z=14&amp;ll=43.581248,13.515684" style="color:#0000FF;text-align:left; position: relative; ">Visualizzazione ingrandita della mappa</a></small>

    
        
    </div>
</div>
        
    </center>
    
   
 
    
</div>


@include('layouts/blackbar')



@endsection


