@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <ul>
                        
                  @foreach ($tab as $item)
                    <a href="{{route('pos-show', $item -> id)}}"> 
                    <li>{{$item -> name}}</li> 
                  </a> 
                  @endforeach
                  
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
