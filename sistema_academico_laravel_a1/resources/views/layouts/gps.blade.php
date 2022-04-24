@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('GPS') }}
                </div>
                <div class="col-md-6 offset-md-4">
                                <a href="{{ url('/') }}" type="submit"  >
                                <input type="button" value="registrar"> 
                                </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection