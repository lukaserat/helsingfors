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

    @include('en._partials.slider', ['page'=>'activities'])

    <div class="body-wrapper">
        <div class="container">

            <br>

            <div class="activities-wrapper">

                <h1 class="title">PATAGONIA LODGE ACTIVITIES</h1>

                <div class="row">
                    <div class="col-xs-3 item-wrapper">

                        <a href="{{route(locale() . '.activities.a')}}">
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

                        <a href="{{route(locale() . '.activities.b')}}">
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

                        <a href="{{route(locale() . '.activities.c')}}">
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

                        <a href="{{route(locale() . '.activities.d')}}">
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

                <div class="row">
                    <div class="col-xs-3 item-wrapper">

                        <a href="{{route(locale() . '.activities.e')}}">
                            <div class="img-wrapper">
                                <img src="{{asset('images/activities/viento.jpg')}}" alt="">
                                <div class="mask mask-1"></div>
                                <div class="mask mask-2"></div>
                                <div class="caption-wrapper">
                                    <h2>Vivi the immensity of one place</h2>
                                    <p>A walk on trails with beautiful panoramic views</p>
                                </div>
                            </div>

                            <div class="caption-wrapper">
                                <h2>Walk to the wind Peninsula</h2>
                                <p>It is an easy and pleasant walk</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

        </div>

        @include('en._partials.testimonials')

    </div>

@endsection

@section('before-scripts-end')
    {!! HTML::script('js/vendor/clndr/clndr.min.js') !!}
@endsection

@section('after-scripts-end')

    <script type="text/template" id="template-calendar">
        <div class="clndr-controls">
            <div class="clndr-previous-button"><%= moment(month +'-'+ year, 'MMMM-YYYY').subtract(1, 'month').format('MMMM') %>
            </div><div class="month-bar"><%= month %>
            </div><div class="clndr-next-button"><%= moment(month +'-'+ year, 'MMMM-YYYY').add(1, 'month').format('MMMM') %></div>
        </div>
        <div class="clndr-grid">
            <div class="days-of-the-week">
                <% _.each(daysOfTheWeek, function(day) { %><div class="header-day"><%= day %></div><% }); %>
                <div class="days"><% _.each(days, function(day) { %><div class="<%= day.classes %>"><%= day.day %></div><% }); %></div>
            </div>
        </div>
        <div class="clndr-today-button">Today</div>
    </script>

@stop
