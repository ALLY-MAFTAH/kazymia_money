@extends('template/default_'.$app['page']['layout'])


@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('agency.name') !!}
    </p>
@endsection
