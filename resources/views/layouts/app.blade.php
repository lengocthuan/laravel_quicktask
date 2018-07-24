<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{!! Form::label(trans('message.title')) !!}</title>
        <!-- CSS And JavaScript -->        
        {!! Html::style('css/all-css.css') !!}        
        {!! Html::script('js/all-js.js') !!}
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
