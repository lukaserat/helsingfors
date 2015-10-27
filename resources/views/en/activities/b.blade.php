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
                            <h1 class="title">HORSE RIDE TO THE MIRADOR DEL CONDOR</h1>
                            <p class="intro">An exciting and fun horse ride, For horse riders with great expertise</p>

                            <br><br>

                            <p>After the guest's arrival to the lodge the guide will organize the activities they will perform during their stay, which will be reconfirmed last night. Please remember that all activities are subject to change depending on weather conditions, the residence time and operational availability.
                            </p>

                            <br>

                            <p>Rating of difficulty: Hard.</p>
                            <p>Length of trip: 30 km</p>
                            <p>Maximum height reached during the trip: 1200m</p>
                            <p>Difference of height: 1000 m.</p>
                            <p>Duration of the trip: 8/9 hs.</p>
                            <p>Please note: Can participate, riders who have already experienced horse rides in the mountains.</p>

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
                    <p>We will go South, along the Milodón River, this area is known as La Faja. After going through a burnt down forest, climbing 600 meters, we will have a breathtaking view on the glacier Milodón, framed by the impressive Cordón Huemul. The vegetation totally changes as the valley of the Condór begins. After a short rest, sheltered by the last trees to have lunch and in order for the horses to rest, we will keep on climbing. This area is inhabited by guanacos and condors that will surely be surprised by our presence. Arriving at the edge after the last efforts, we will stand in front of a breathtaking view, in the heart of the National Park, Los Glaciares. From the Mount Pintado to the Mount Fitz Roy, we stand in front of the ANDES.</p>
                </div>


            </div>

        </div>

        @include('en._partials.other-activities', ['a'])
        @include('en._partials.testimonials')

    </div>

@endsection

@section('after-scripts-end')

@stop
