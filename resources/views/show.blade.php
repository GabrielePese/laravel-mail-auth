@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                        Description: {{$tab -> description}} <br>
                        Like: {{$tab -> like}} <br> 
                        Share:  {{$tab -> shares}} </li>
                       <br>
                <a  class="btn btn-primary" href="{{route('home')}}"> BACK HOME</a>
                @auth
                <a  class="btn btn-danger" href="{{route('pos-destroy', $tab -> id)}}"> DELETE</a>
                @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
