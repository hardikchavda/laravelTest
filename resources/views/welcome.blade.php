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
 
   @each('arrdata', $name, 'var', 'empty')
   --}}
   <table>
       <tr>
           <td>name</td>
           <td>address</td>
           <td>created</td>
           <td>updated</td>           
           <td>Modiy</td>           
       </tr>
    @forelse ($name as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>  {{$item->address}}</td>
        <td> {{$item->created_at}}</td>
        <td> {{$item->updated_at}}</td>
         <td> <a href="modify/{{$item->id}}">Edit/Delete</a></td>         
    </tr>
        
      
       
       
    @empty
        Nothing Found
    @endforelse
</table>

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