@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header  text-center">{{ __('List task') }}</div>
                    <a class="btn btn-success text-white" href="{{ route('task.create') }}">{{ __('Task create') }}</a>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th> {{ __('TITLE') }}</th>
                                <th> {{ __('DESCRIPTION') }}</th>
                                <th> {{ __('STATUS') }}</th>
                                <th> {{ __('DEADLINE') }}</th>
                                <th> {{ __('ACTION') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users->tasks as $task)
                                <tr>
                                    <th scope="row">{{$task->id}}</th>
                                    <td>{{$task->title}}</td>
                                    <td>{{$task->description}}</td>
                                    <td>{{$task->status}}</td>
                                    <td>{{$task->deadline}}</td>
                                    <td>  <form action="{{ route('task.destroy',$task->id) }}" method="POST">
                                            <a class="btn btn-info" href="{{ route('task.show',$task->id) }}">Show</a>
                                            <a class="btn btn-primary" href="{{ route('task.edit',$task->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
