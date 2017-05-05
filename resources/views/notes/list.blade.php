@extends('layout')

@section('content')
        <h2>Notes</h2>
        <P>
            <a href="{{ url('notes/create') }}"> Add a Note</a>
        </P>
        <ul>
            @foreach($notes as $note)
            <li>    
                {!! $note->note !!}
            </li>
            @endforeach
        </ul>

        <!--<form method="POST"> 
            {!! csrf_field() !!}-->   
            <!--<input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
        <!--<textarea></textarea>
            <button type="submit">Create Note</button>
        </form>-->
@endsection
