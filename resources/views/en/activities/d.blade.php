@extends(implode('.', [locale(), '_template', 'master']))

@section('page-title')
    Actividades . Lodge Helsingfors | Lodge in Patagonia - Los Glaciares National Park - Lake Viedma, Santa Cruz, Argentina
@endsection

@section('meta_description')
    Entre las actividades y excursiones que tenemos opciones Helsingfors ofrece paseos a caballo, senderismo, pesca, fotografía, observación, entre otros.
@endsection

@section('meta')
    <meta name="keywords" content="trekking, hikking, caballo, jinete del caballo, a caballo, senderismo, pesca, fotografía, observación, entre otros,, lodge in patagonia, luxury lodge in patagonia, los glaciares national park, hosteria helsingfors, parque nacional los glaciares, estancia helsingfors, lodge lake viedma,lodge el chalten, lodge el calafate, remote patagonian lodge, active travel, estancia patagonia, horseback riding in patagonia, patagonia trekking, trekking in patagonia, hiking in patagonia, guanaco sighting" />
@endsection

@section('content')

    @include('en._partials.slider', ['page'=>'activities.a'])

    <div class="body-wrapper">

        <div class="container">

            <div class="container-fluid">

                <div class="shop-top"></div>

                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">

                        <div class="text-content activity">
                            <h1 class="title">TREKKING AND HORSEBACK RIDING TO THE ESTANCIA LOS HERMANOS</h1>
                            <p class="intro">Enjoy the tranquility, To relax and marvel at nature.</p>

                            <br><br>

                            <p>After the guest's arrival to the lodge the guide will organize the activities they will perform during their stay, which will be reconfirmed last night. Please remember that all activities are subject to change depending on weather conditions, the residence time and operational availability.</p>

                            <br>

                            <p>Level of difficulty: Easy.</p>
                            <p>Travel Distance: 12 Km.</p>
                            <p>Maximum height reached during the tour: 370 m.</p>
                            <p>Journey time: Trekking: 3:30 pm. Piggyback: 3:00 pm.</p>

                            <br>

                            <div class="share">
                                <strong>SHARE</strong>
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i> Tweet</a>
                                    </li><li>
                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i> Share</a>
                                    </li><li>
                                        <a href="#" class="google"><i class="fa fa-google-plus"></i> Google+</a>
                                    </li><li>
                                        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i> Pinterest</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="text-content activity">
                    <h2 class="sub-title">Tour</h2>
                    <p>Taking this course, the river is crossed Alfredo after a climb will enjoy a spectacular view of Lake Viedma. Going through the three gaps you can see the typical vegetation of the steppe and lots of birds of the region such as flamingos, blemishes and geese. After an hour of walking we reach the Estancia Los Hermanos where you can visit the shearing shed, the garden that caters to Helsingfors, and meet a true Patagonian farm in full operation. Way Brothers sheep, guanacos, cows and horses are spectacular, many of them descendants of the Quarter Horse stallion that is in the room. After the visit to stay back to enjoy the wonderful view of Helsingfors.</p>
                </div>


            </div>

        </div>

        @include('en._partials.other-activities', ['a'])
        @include('en._partials.testimonials')

    </div>

@endsection

@section('after-scripts-end')

@stop
