@extends(implode('.', [locale(), '_template', 'master']))

@section('content')


    <div class="slider-wrapper">
        Slider
    </div>
    <div class="body-wrapper">
        <div class="container">
            Body
        </div>
    </div>

@endsection

@section('after-scripts-end')
@stop
