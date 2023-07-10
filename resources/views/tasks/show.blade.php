@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header  text-center">{{ __('Show Task') }}  # {{$task->id}}</div>
                    <a class="btn btn-info text-white" href="{{ route('task.index') }}">{{ __('back') }}</a>
                    <label>
                        Title
                    </label>
                    <p> {{$task->title}}</p>
                    <label>
                        description
                    </label>
                     <p> {{$task->description}}</p>
                    <label>
                        Status
                    </label>
                    <p class="btn bg-dark-subtle text-white"> {{$task->status}}</p>
                    <label>
                        Deadline
                    </label>
                    <p> {{$task->deadline}}</p>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
