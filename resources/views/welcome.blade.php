@extends('layouts.main')
@section('content')
{{-- isset($name) ? print_r($name) : 'Default Data' --}}
{{--     
    @if(1==1)
        {{ 'Default Data'}}           
    @elseif(1==3)
        {{ 'Elseif Data'}}
    @else
        {{ 'Error'}}  
    @endif 

    @if (1!=2)
        Nothing in if...
    @endif

    @unless(1!=1)
        Nothing in unless...
    @endunless 

    

    @for($i=0;$i<=10;$i++)
        {{ $i }}<br>
    @endfor
   
    @forelse ($name as $key => $value)
        @include('arrdata')        
    @empty
        @include('empty')
    @endforelse
 --}}
   @each('arrdata', $name, 'var', 'empty')

@endsection
@section('cssforwelcome')
    <link rel="stylesheet" href="original.css">      
@endsection
@section('cssforwelcome')
    <style>
        {

        }
    </style>
@endsection
@section('cssforwelcome')
    <link rel="stylesheet" href="style2.css">
@endsection