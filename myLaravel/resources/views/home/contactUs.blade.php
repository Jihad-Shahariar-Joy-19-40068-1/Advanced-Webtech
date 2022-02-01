@extends('layouts.task1Layout')
@section('task1')

<center>
<h1><a href="https://www.facebook.com/jihadshahariar.joy/">Jihad Shahariar Joy</a></h1>


    @foreach ($contacts as $contact)
        <div>
            {{ $contact->name }}
            <br>
            {{ $contact->role }}
            <br>
            {{ $contact->email }}
        </div>
    @endforeach
</center><br>

@endsection('')