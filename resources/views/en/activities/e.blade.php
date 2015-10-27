@extends(implode('.', [locale(), '_template', 'master']))

@section('page-title')
    Walk to the wind Peninsula > Lodge Helsingfors | Lodge in Patagonia - Los Glaciares National Park - Lake Viedma, Santa Cruz, Argentina
@endsection

@section('meta_description')
    Walk to the wind Peninsula, Vivi the immensity of one place, It is an easy and pleasant walk
@endsection

@section('meta')
    <meta name="keywords" content="Walk to the wind Peninsula, Wind Peninsula, Punta del Viento, arm Moyano, Alfred Ramstrom, lodge in patagonia, luxury lodge in patagonia, los glaciares national park, hosteria helsingfors, parque nacional los glaciares, estancia helsingfors, lodge lake viedma,lodge el chalten, lodge el calafate, remote patagonian lodge, active travel, estancia patagonia, horseback riding in patagonia, patagonia trekking, trekking in patagonia, hiking in patagonia, guanaco sighting" />
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
                            <h1 class="title">WALK TO THE WIND PENINSULA</h1>
                            <p class="intro">Vivi the immensity of one place, A walk on trails with beautiful panoramic views.</p>

                            <br><br>

                            <p>After the guest's arrival to the lodge the guide will organize the activities they will perform during their stay, which will be reconfirmed last night. Please remember that all activities are subject to change depending on weather conditions, the residence time and operational availability.</p>

                            <br>

                            <p>Level of difficulty: Easy.</p>
                            <p>Travel Distance: 6 Km.</p>
                            <p>Maximum height reached during the trip: 200 above the lake.</p>
                            <p>Journey time: 3 hours</p>

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
                    <p>A former cattle trail leads to Punta del Viento, the first viewpoint of the breast or arm Moyano. It is an easy hike that allows very nice views of the town and its grove of Sequoias. On the road the ruins of the house of Alfred Ramstrom, first settler of the area visited. Arriving in Lakeshore start Moyano arm that goes into the mountains can be seen to the east and the vastness of Lake Viedma with its azure waters, characteristic color of glacial lakes.</p>
                </div>


            </div>

        </div>

        @include('en._partials.other-activities', ['a'])
        @include('en._partials.testimonials')

    </div>

@endsection

@section('after-scripts-end')

@stop
