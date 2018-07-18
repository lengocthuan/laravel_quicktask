<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>

        <title>{!! Form::label(trans('message.title')) !!}</title>

        <!-- CSS And JavaScript -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    </head>

    <body>

        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->                
                <center><h1>{!! Form::label('litk', trans('message.ltask'), ['class' => 'text-muted']) !!}</p></h1></center>
            </nav>
        </div>
        @yield('content')

    </body>
</html>
