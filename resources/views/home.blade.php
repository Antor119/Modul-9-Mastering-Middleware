{{-- <h1>{{$result}}</h1>
<h2>{{3+6}}</h2>
<h2>{{3*6}}</h2> --}}

{{-- @if ($result==100)
    <h1>Result is Hundred</h1>
@elseif ($result==1000)
    <h1>Result is Thaousend</h1>
@elseif ($result==1000000)
    <h1>Result is One Lakh</h1>
@else
    <h1>Result is not in our range</h1>
@endif --}}


{{-- @switch($result)
    @case(100)
        <h1>Result is a 100</h1>

        @break
    @case(1000)
        <h1>Result is a 1000</h1>
        @break
    @case(100000)
        <h1>Result is a 100000</h1>



    @break

    @default
    <h1>Result is invaild</h1>

@endswitch --}}

{{-- <ul>
@for ($i=0; $i<30; $i++)
<button><li>{{$i}}</li></button>

@endfor

</ul> --}}
<ul>
    @foreach ($users as $eachUser)
        <li>User name is {{$eachUser['name']}} and user city {{$eachUser['City']}}</li>
    @endforeach

</ul>

@include('component.header')
@include('component.hero')
@include('component.footer')

