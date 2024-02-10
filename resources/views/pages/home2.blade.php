@php
    $num1=30;
    $num2=45;
    $sum=$num1+$num2;
@endphp


@foreach ($users as $item)

<li>Name: {{$item['name']}} City: {{$item['city']}}</li>

@endforeach



@include('component2.hero',['homeCount'=>$sum])

<p>Home Page</p>



{{-- <h1>{{$sum}}</h1> --}}
