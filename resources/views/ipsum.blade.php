@extends('layout')

@section('title')
    P3
@stop
@section('body')
@stop
@section('form4')

    <form name="form4" id="form4" method="POST" action="/ipsum">
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <div class="col-md-4">
            <h2>Lorem Ipsum</h2>
            <label>Paragraphs : <input type="text" name="numParagraphs" size="30" value="" maxlength="60"/></label><br /><br />
            <input type="submit" value="Enter" name="Button" />


            @if(isset($paragraphs))
                @foreach($paragraphs as $key=>$value)
                    <p>{{$paragraphs[$key]}}</p>
                @endforeach
            @endif

            @if(count($errors)>0)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

        </div>


    </form>

@stop
