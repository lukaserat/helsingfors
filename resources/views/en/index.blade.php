@extends(implode('.', [locale(), '_template', 'master']))

@section('content')

    @include('en._partials.slider')

    @include('en._partials.booking-prompt')

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
                            {!! Form::open(['route'=>'booking.create']) !!}

                            <p>Check availability for your <strong>booking</strong> <span class="glyphicon glyphicon-tags"></span></p>

                            <div class="first-line">
                                <div class="form-group @if($errors->has('name')) has-error @endif">
                                    <input name="name" type="text" class="form-control" placeholder="Name and Surname">
                                </div><div class="form-group @if($errors->has('email')) has-error @endif">
                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="second-line">
                                <div class="group">
                                    <div class="form-group @if($errors->has('in_date')) has-error @endif">
                                        <div class="input-group">
                                            <span class="input-group-addon">IN</span>
                                            <input name="in_date" type="text" class="calendar form-control" placeholder="YYYY/MM/DD">
                                        </div>
                                        <div class="cal1 calendar-object"></div>
                                    </div><div class="form-group @if($errors->has('out_date')) has-error @endif">
                                        <div class="input-group">
                                            <span class="input-group-addon">OUT</span>
                                            <input name="out_date" type="text" class="calendar form-control" placeholder="YYYY/MM/DD">
                                        </div>
                                        <div class="cal2 calendar-object"></div>
                                    </div>
                                </div><div class="group">
                                    <div class="form-group @if($errors->has('num_passengers')) has-error @endif">
                                        <input name="num_passengers" type="text" class="form-control" placeholder="# Passengers">
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
