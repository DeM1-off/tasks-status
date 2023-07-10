@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header  text-center">{{ __('Create Task') }}</div>
                    <a class="btn btn-info text-white" href="{{ route('task.index') }}">{{ __('Back') }}</a>
                    <form class="p-3" method="POST" action="{{ route('task.store') }}">
                        @csrf
                        <label class="d-block w-100" for="">
                            {{ __('Title') }}
                        </label>
                        <input class="d-block w-100" type="text" name="title" placeholder=" {{ __('Title') }}">
                        @if($errors->has('title'))
                            <div class="btn btn-warning w-100">{{ $errors->first('title') }}</div>
                        @endif
                        <label class="d-block w-100" for="">
                            {{ __('Description') }}
                        </label>
                        <textarea class="d-block w-100" name="description">
                    </textarea>
                            @if($errors->has('description'))
                                <div class="btn btn-warning w-100">{{ $errors->first('description') }}</div>
                            @endif
                        <label class="d-block w-100" for="">
                            {{ __('STATUS') }}
                        </label>
                        <select class="d-block w-100" name="status">

                                <option value="" selected disabled>None  </option>
                            @foreach($status as $item)
                                <option value="{{$item}}">
                                    {{$item}}
                                </option>
                            @endforeach
                        </select>
                        @if($errors->has('status'))
                            <div class="btn btn-warning w-100">{{ $errors->first('status') }}</div>
                        @endif
                        <label class="d-block w-100" for="">
                            {{ __('DEADLINE') }}
                        </label>
                        <input class="d-block w-100" type="datetime-local" name="deadline">
                        @if($errors->has('deadline'))
                            <div class="btn btn-warning w-100">{{ $errors->first('deadline') }}</div>
                        @endif
                        <input class="btn btn-success mt-2 w-100" type="submit">

                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
