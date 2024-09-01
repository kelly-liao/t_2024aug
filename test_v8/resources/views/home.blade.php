<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <!-- user id is :{{ $i_d ?? '' }} -->
        <!-- way 1 -->
        <!-- @if(count ($products))
         @foreach($products as $product)
            {{$product}}
         @endforeach
        @else
            <p>No any products to show</p>
        @endif  -->

        <!-- way2 -->
        @forelse($products as $product)
            {{ $product }}
        @empty
        <p>No any products to show</p>
        @endforelse
    </body>
</html>
<!-- @extends('layouts.app')

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

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->
