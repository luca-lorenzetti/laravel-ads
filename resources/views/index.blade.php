@extends('layouts.base')

@section('content')
 <div class="content">
     {{-- Container --}}
    <div class="container-app">

        {{-- Top content --}}
       <div class="top-content">
            {{-- Logo --}}
            <div class="logo">
                <img id="logo" src="{{asset('img/logo.svg')}}" alt="spotify-logo" >
            </div>
            {{-- /Logo --}}

            {{-- Navbar --}}
            <nav class="navbar">
                <ul>
                    <li><a href="cookie">Cookie</a></li>
                    <li><a href="session">Session</a></li>
                </ul>
            </nav>
            {{-- /Navbar --}}

       </div>
        {{-- /Top content --}}
        
        {{-- Main message --}}
        <div class="main-message">
            <p id="main-promo">Passa a Premium gratis per 1 mese</p>
            <p id="details">Al termine dell'offerta, solo 9,99&euro; al mese. Annulla in qualsiasi momento</p>
        </div>  
        {{-- /Main message --}}

        {{-- Plans button --}}
        <div class="plans_button btn">
            <button>
                Vedi piani
            </button>
        </div>
        {{-- /Plans button --}}

        {{-- Details terms --}}
        <div class="details_terms">
            <p>Si applicano Termini e condizioni. L'offerta di 1 mese gratis non è disponibile per gli utenti che hanno già provato Spotify Premium.</p>
        </div>
        {{-- /Details terms --}}
    </div>
     {{-- /Container --}}
     <div id="app">
        <modal show="true"/>
     </div>


 </div>


@endsection
