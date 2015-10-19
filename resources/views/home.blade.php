@extends('layout')

@section('title')
    P3
@stop
@section('body')

    <div class="container">
       <form name="form1" id="form1" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
            <div class="jumbotron">
                <div class="container">
                    <h1>Developer's Best Friend</h1>
                    <p>This is a web application which includes a Lorem Ipsum Generator and a Random User Generator. The Website uses Bootstrap within for design.  The project
                        itself uses fzaninotto/Faker for random user generation and badcow/lorem-ipsum for lorem ipsum generation.</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Create Ipsum</a></p>
                </div>
            </div>
        </form>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <form name="form2" id="form2" method="POST" action="/home">
                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                    <div class="col-md-4">
                        <h2>Random User</h2>
                        <label>Number of Users : <input type="text" name="numUser" size="30" value="" maxlength="60"/></label><br /><br />
                        <input type="submit" value="Change User" name="changeUser" /><br/>
                        @if(isset($users))
                            @foreach($users as $key=>$value)
                                <p>{{$users[$key]}}</p>
                            @endforeach
                            what the fuck
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


                <form name="form3" id="form3" method="post" action="/home">
                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                    <div class="col-md-4">
                        <h2>Random User</h2>
                        @if(isset($users))
                        @foreach ($users as $user)
                            <p>{{ $user  }}</p>
                        @endforeach
                        @endif
                        <p><a class="btn btn-default" href="#" role="button">Change User</a></p>
                    </div>
                </form>






            </div>

            <hr>

            <footer>
                <p>© Paul Bertolami 2015</p>
            </footer>
        </div>



    </div>
    @stop
