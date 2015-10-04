@extends(implode('.', [locale(), '_template', 'master']))

@section('content')

    @include('en._partials.slider')

    <div class="body-wrapper">
        <div class="container">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-6 page-title">
                        <h1>Helsingfors Lodge</h1>
                        <p>- A Unique Destination in Patagonia</p>
                    </div>
                    <div class="col-xs-6">
                        <div class="booking-form-wrapper">
                            {!! Form::open() !!}

                            <p>Check availability for your <strong>booking</strong> <span class="glyphicon glyphicon-tags"></span></p>

                            <div class="first-line">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name and Surname">
                                </div><div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="second-line">
                                <div class="group">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">IN</span>
                                            <input type="text" class="form-control" placeholder="YYYY/MM/DD">
                                        </div>
                                    </div><div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">OUT</span>
                                            <input type="text" class="form-control" placeholder="YYYY/MM/DD">
                                        </div>
                                    </div>
                                </div><div class="group">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="# Passengers">
                                    </div><div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-content">

                <p>Set in a charming landscape in Los Glaciares National Park in Patagonia and surrounded by lush woods,
                Helsingfors Lodge boasts 9 luxury rooms in an exquisite setting often compared to JRR Tolkein's 'Lord of The Rings' stories.
                Helsingfors is a very unique destination in Patagonia, a place of incredible beauty with exclusive services
                and a sophisticated regional cuisine that will make this luxury lodge an unforgettable place.</p>

                <p>The design of the Patagonia lodge is intended to blend with, and compliment, the natural surroundings of Patagonia, South America.
                The Patagonia lodge is surrounded by a majestic natural landscape, protected by lush woods, which give way to a panoramic view of
                the lake, Mount Fitz Roy and the Andes Mountains. Since 1996, Helsingfors Lodge has welcomed visitors from all over the world and
                allows them to discover its past, its great beauty, and enjoy Patagonia in a unique way.</p>

            </div>

            <div class="activities-wrapper">

                <h1 class="title">PATAGONIA LODGE ACTIVITIES</h1>
                <div class="row">
                    <div class="col-xs-3 item-wrapper">

                        <a href="#">
                            <div class="img-wrapper">
                                <img src="{{asset('images/activities/laguna_azul_home.jpg')}}" alt="">
                                <div class="mask mask-1"></div>
                                <div class="mask mask-2"></div>
                                <div class="caption-wrapper">
                                    <h2>An Unforgettable Walk</h2>
                                    <p>Enjoy a couple, with family or friends the charm of nature</p>
                                </div>
                            </div>

                            <div class="caption-wrapper">
                                <h2>Trekking or Horseback to Blue Lagoon</h2>
                                <p>The walk is moderately difficult</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-xs-3 item-wrapper">

                        <a href="#">
                            <div class="img-wrapper">
                                <img src="{{asset('images/activities/cabalgata_condor_home.jpg')}}" alt="">
                                <div class="mask mask-1"></div>
                                <div class="mask mask-2"></div>
                                <div class="caption-wrapper">
                                    <h2>An exciting and fun horse ride</h2>
                                    <p>For horse riders with great expertise</p>
                                </div>
                            </div>

                            <div class="caption-wrapper">
                                <h2>Horse ride to the Mirador del condor</h2>
                                <p>The tour has a high river</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-xs-3 item-wrapper">

                        <a href="#">
                            <div class="img-wrapper">
                                <img src="{{asset('images/activities/laguna_del_morro_home.jpg')}}" alt="">
                                <div class="mask mask-1"></div>
                                <div class="mask mask-2"></div>
                                <div class="caption-wrapper">
                                    <h2>An adventure to experience nature</h2>
                                    <p>A very long walk crossing landscapes of dreams.</p>
                                </div>
                            </div>

                            <div class="caption-wrapper">
                                <h2>Trekking to Laguna del Morro</h2>
                                <p>The walk has a higher level of demand</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-xs-3 item-wrapper">

                        <a href="#">
                            <div class="img-wrapper">
                                <img src="{{asset('images/activities/los_hermanos.png')}}" alt="">
                                <div class="mask mask-1"></div>
                                <div class="mask mask-2"></div>
                                <div class="caption-wrapper">
                                    <h2>Enjoy the tranquility</h2>
                                    <p>To relax and marvel at nature</p>
                                </div>
                            </div>

                            <div class="caption-wrapper">
                                <h2>Trekking and horseback riding to the Estancia Los Hermanos</h2>
                                <p>The ride has low difficulty</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

        </div>


        <div class="testimonials-wrapper">

            <div class="container">

                <div class="col-xs-4 col-xs-offset-4">
                    <img src="{{asset('images/trip-advisor.png')}}" alt="TripAdvisor" title="TripAdvisor" class="t_advisory img-responsive">
                </div>

            </div>

        </div>

    </div>

@endsection

@section('after-scripts-end')
    <script type="text/javascript">

        var revapi;

        jQuery(document).ready(function() {

            jQuery('.tp-banner').parent().addClass('active');

            revapi = jQuery('.tp-banner').revolution(
                {
                    delay:9000,
                    startwidth:1170,
                    startheight:500,
                    hideThumbs:10,
                    fullWidth:"on",
                    fullScreenAlignForce:"on",
                    forceFullWidth:"on",
                    spinned:"spinner4",
                    onHoverStop:"on"
                });

        });	//ready

    </script>
@stop
