@extends('layout')

@section('title')
    P3
@stop
@section('content1')

    <div class="container">
       <form name="form1" id="form1" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
            <div class="jumbotron">
                <div class="container">
                    <h1>Developer's Best Friend</h1>
                    <p>This is a web application which includes a Lorem Ipsum Generator and a Random User Generator. The Website uses Bootstrap within for design.  The project
                        itself uses fzaninotto/Faker for random user generation and badcow/lorem-ipsum for lorem ipsum generation.</p>
                </div>
            </div>
        </form>
@stop


@section('content2')
                <form name="form2" id="form2" method="POST" action="/home">
                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                    <div class="col-md-4">
                        <h2>Create Random User</h2>
                        <label>Enter # of Users (1-3) : <input type="text" name="numUser" size="30" value="" maxlength="60"/></label><br /><br />
                        <input type="submit" value="Change User" name="changeUser" /><br/>

                        @if(isset($users))
                                @for($j=0; $j<$number; $j++)
                                         @foreach ($users[$j] as $key => $value)
                                            @if($key == 'name')
                                                <p>Name: {{$value}} </p>
                                            @elseif($key == 'address')
                                                <p>Address: {{$value}}</p>
                                            @elseif($key == 'phoneNumber')
                                                <p>Phone: {{$value}}</p>
                                            @endif
                                         @endforeach
                                 @endfor
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
@section('content3')

                <form name="form3" id="form3" method="post" action="/rand">
                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                    <div class="col-md-4">
                        <h2>Pass Words</h2>
                        <label>Number of Words : <input type="text" name="numWords" size="30" value="" maxlength="60"/></label><br /><br />
                        <input type="submit" value="Enter" name="Button" />



                            @if(isset($wordsArray))
                                @foreach($wordsArray as $wordArray)
                                <h1>Words: <?php echo $wordArray; ?></h1>
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
@section('content4')
                <form name="form4" id="form4" method="POST" action="/ipsum">
                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                    <div class="col-md-4">
                        <h2>Create Lorem Ipsum</h2>
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
            </div>

            <hr>

            <footer>
                <p>© Paul Bertolami 2015</p>
            </footer>

@stop
