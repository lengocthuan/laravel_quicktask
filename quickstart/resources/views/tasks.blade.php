<!-- resources/views/tasks.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
    
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        {!! Form::open(['url' => 'task', 'method' => 'post', 'class' => 'form-horizontal']) !!}

            <!-- Task Name -->
            <div class="form-group">
                {!! Form::label('task', trans('message.task'), ['class' => 'col-sm-3 control-label']) !!}
                
                <div class="col-sm-6">
                    {!! Form::text('name', $value = null, ['id' => 'task-name', 'class' => 'form-control']) !!}                                        
                </div>
            </div>

           <!--  Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">                    
                    {!! Form::submit(trans('message.add_task'), ['class' => 'btn btn-default']) !!}
            </div>
             
        {!! Form::close() !!}
    </div>

    <!-- TODO: Current Tasks -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">

            <div>
                {!! Form::label('c_task', trans('message.current_task'), ['class' => 'panel-heading']) !!}
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>{{ trans('message.task') }}</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                                <td>
                                    <!-- TODO: Delete Button -->                                    
                                    {!! Form::open(['url' => ('task/'.$task->id), 'method' => 'delete']) !!}
                                   
                                    {!! Form::submit(trans('message.delete'), ['class' => 'btn btn-danger']) !!}    
                                                                                    
                                    {!! Form::close() !!}                
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

@endsection


