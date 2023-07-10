@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <a class="btn btn-info text-white" href="{{ route('task.index') }}">{{ __('back') }}</a>

                    <img class="h-25" src="/image/404.jpg">
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
