@extends(implode('.', [locale(), '_template', 'master']))

@section('page-title')
    Services . Lodge Helsingfors | Lodge in Patagonia - Los Glaciares National Park - Lake Viedma, Santa Cruz, Argentina
@endsection

@section('meta_description')
    See list aand services
@endsection

@section('meta')
    <meta name="keywords" content="services, dining, lodge in patagonia, luxury lodge in patagonia, los glaciares national park, hosteria helsingfors, parque nacional los glaciares, estancia helsingfors, lodge lake viedma,lodge el chalten, lodge el calafate, remote patagonian lodge, active travel, estancia patagonia, horseback riding in patagonia, patagonia trekking, trekking in patagonia, hiking in patagonia, guanaco sighting" />
@endsection

@section('content')

    @include('en._partials.slider', ['page'=>'services'])

    <div class="body-wrapper">
        <div class="container">

            <br>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-9"> <!-- MAIN CONTENT -->


                        <div class="text-content">

                            <h1 class="title">SERVICES</h1>

                            <p class="intro">A unique destination in Patagonia, a place of unparalleled service and exclusive nature with a sophisticated regional cuisine and the warmth of its people make HELSINGFORS an unforgettable place.</p>

                            <div class="img-wrapper">
                                <img src="{{asset('images/servicios/salon.jpg')}}" alt="">
                            </div>

                            <h4 class="subtitle">Within afrecemos services can include:</h4>
                            <ul>
                                <li>Dining room with three-course fixed meals. Alcohol-free beverages are included during the meals. Wines and other alcoholic beverages are not included.</li>
                                <li>Horses</li>
                                <li>Fishing Rods</li>
                                <li>Bar</li>
                                <li>Laundry</li>
                                <li>Cradle</li>
                                <li>Outdoor Parking</li>
                                <li>Credit cards accepted at the lodge: Visa, American Express and Mastercard</li>
                                <li>Telephone only at the front desk</li>
                                <li>Mobile phones have no signal and we do not have Internet service</li>
                                <li>WiFi Internet access at the lobby</li>
                                <li>We do not have television</li>
                                <li>220V electricity</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xs-3"> <!-- SIDE PICTURES -->

                        <div class="side-pictures">


                            <ul class="list-unstyled">
                                <li>
                                    <div class="img-wrapper">
                                        <img src="{{asset('images/servicios/bar.jpg')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="img-wrapper">
                                        <img src="{{asset('images/servicios/caballo.jpg')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="img-wrapper">
                                        <img src="{{asset('images/servicios/desayuno.jpg')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="img-wrapper">
                                        <img src="{{asset('images/servicios/estar.jpg')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="img-wrapper">
                                        <img src="{{asset('images/servicios/pajaro.jpg')}}" alt="">
                                    </div>
                                </li>
                            </ul>

                            <h3 class="photo-gallery">PHOTO GALLERY</h3>
                            <p>For more photos of the lodge and the National Park Glacial access the image gallery, a unique place.</p>

                        </div>

                    </div>
                </div>
            </div>

            <br>

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
