@extends(implode('.', [locale(), '_template', 'master']))

@section('page-title')
    Trekking or Horseback to Blue Lagoon > Lodge Helsingfors | Lodge in Patagonia - Los Glaciares National Park - Lake Viedma, Santa Cruz, Argentina
@endsection

@section('meta_description')
    Trekking or Horseback to Blue Lagoon, An unforgettable walk for all, The walk is moderately difficult
@endsection

@section('meta')
    <meta name="keywords" content="Trekking or Horseback to Blue Lagoon, Trekking, Horseback Riding, Blue Lagoon, ride,, lodge in patagonia, luxury lodge in patagonia, los glaciares national park, hosteria helsingfors, parque nacional los glaciares, estancia helsingfors, lodge lake viedma,lodge el chalten, lodge el calafate, remote patagonian lodge, active travel, estancia patagonia, horseback riding in patagonia, patagonia trekking, trekking in patagonia, hiking in patagonia, guanaco sighting" />
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
                            <h1 class="title">TREKKING OR HORSEBACK TO BLUE LAGOON</h1>
                            <p class="intro">An unforgettable walk for all, Enjoy a couple, with family or friends the charm of nature</p>

                            <br><br>

                            <p>After the guest's arrival to the lodge the guide will organize the activities they will perform during their stay, which will be reconfirmed last night. Please remember that all activities are subject to change depending on weather conditions, the residence time and operational availability.
                            </p>

                            <br>

                            <p>Rating of difficulty: Medium</p>
                            <p>Length of trip: 16 km</p>
                            <p>Maximum altitude reached</p>
                            <p>during the trip: 850 m</p>
                            <p>Duration of trip: by foot: 5 h 30 min / on horseback: 4 h 30 min</p>

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
                    <p>The visitor sets out on an old grass trail that starts at the same lodge. The path enters the River Alfredo valley (the same river that provides energy to the lodge), gradually ascending by the sides of the Huemul Hill and with the soft music from the river as company. After a forty-minute walk, a most magnificent view can be seen, from where one can appreciate the magnitude of Mt. Fitz Roy emerging from the other side of Viedma Lake. The path continues to enter deeper into the valley that becomes narrower, surrounded by the Cordón Huemul and its peaks that reach 2700 meters in height; the Blue Lagoon glacier can already be seen in the horizon. The footpath then leads into a forest of “lengas” and “ñires”. During the journey it is usual to see guanacos and condors curiously approaching to observe the visitor. After a one-hour walk at the end of the valley, one sees the river descending in escalating form on the rocks, forming a spectacular waterfall at a height of 300 meters. The journey continues bordering the mountain to where the river rises. This spot is reached after a fifty-minute climb and places the traveler at the same level of the perpetual snow that lies on the mountains that surround him. A ten-minute walk and a small wood separate the visitor from his objective. Upon arrival, one can see the lagoon in a deep bright blue, contrasting with the darkness of the mountain and the whiteness of the glacier, which descends from the highest of the Andes Mountains to the very bank of the lagoon. The surroundings are beautiful and invite to contemplation and reflection in absolute silence, which is only interrupted by the sounds of the usual avalanches that take place from the summits falling to the glacier.</p>
                </div>


            </div>

        </div>

        @include('en._partials.other-activities', ['a'])
        @include('en._partials.testimonials')

    </div>

@endsection

@section('after-scripts-end')

@stop
