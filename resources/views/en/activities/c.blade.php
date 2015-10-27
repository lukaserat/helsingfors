@extends(implode('.', [locale(), '_template', 'master']))

@section('page-title')
    Trekking to Laguna del Morro > Lodge Helsingfors | Lodge in Patagonia - Los Glaciares National Park - Lake Viedma, Santa Cruz, Argentina
@endsection

@section('meta_description')
    Trekking to Laguna del Morro, An adventure to experience nature, The walk has a higher level of demand
@endsection

@section('meta')
    <meta name="keywords" content="Trekking to Laguna del Morro, Wind peninsula, southern margin of the arm Moyano, Sawmill Lakes, Lake Viedma, lodge in patagonia, luxury lodge in patagonia, los glaciares national park, hosteria helsingfors, parque nacional los glaciares, estancia helsingfors, lodge lake viedma,lodge el chalten, lodge el calafate, remote patagonian lodge, active travel, estancia patagonia, horseback riding in patagonia, patagonia trekking, trekking in patagonia, hiking in patagonia, guanaco sighting" />
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
                            <h1 class="title">TREKKING TO LAGUNA DEL MORRO</h1>
                            <p class="intro">An adventure to experience nature, A very long walk crossing landscapes of dreams.</p>

                            <br><br>

                            <p>After the guest's arrival to the lodge the guide will organize the activities they will perform during their stay, which will be reconfirmed last night. Please remember that all activities are subject to change depending on weather conditions, the residence time and operational availability.</p>

                            <br>

                            <p>Rating of difficulty: Hard</p>
                            <p>Length of trip: 24 km.</p>
                            <p>Maximum height reached during the trip: 400 ms</p>
                            <p>Duration of trip: Round trip: 8/9.00 hs.</p>

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
                    <p>After getting to the Peninsula del viento, the most adventurous will bea ble to chose to sep on following the same trail. After 4 hours on irregular soil, we finally get to the Lagunas del Aserradero or del Morro. This is a truely magical place full of colours and contrasts. Two small lagunas seem to be almost green due to the reflection of the trees in the water. Looking at the horizon, you can see the Brazo Moyano with itÂ’s intense sky blue. There are many trouts in the lagunas, they have been intruduced in 1988. there, you will be able to fish as long as you put the fish back in the water. To go back to the Hostería, we will take the same trail (4 hours) but this time we will get the chance to see something totally different: the Lake Viedma , right in front of us.</p>
                </div>


            </div>

        </div>

        @include('en._partials.other-activities', ['a'])
        @include('en._partials.testimonials')

    </div>

@endsection

@section('after-scripts-end')

@stop
