@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header  text-center">{{ __('Dashboard') }}</div>



                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <a class="btn btn-success text-white" href="{{ route('task.create') }}">{{ __('Task create') }}</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
