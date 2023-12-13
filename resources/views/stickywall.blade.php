@extends('layouts\main')
@section('nav') @extends('layouts.nav')
@section('content')
{{-- content --}}
<div class="container">

    @foreach ($stick as $sticky )
    <div class="card ml-2 ">
        <span class="card-title"> {{$sticky->stick_title}}</span>
        <p class="card-content"> {{$sticky->stick_content}}</p>   
        <button class="delete">Delete</button>                     

    </div>
    @endforeach


    <div class="card ml-2">
        <a href="">
            <div class="add-more">
                <div>
                    <button href="" class="add-more-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            
                    </button>    
                </div>
            </div>
        </a>

    </div>
</div>
@endsection

