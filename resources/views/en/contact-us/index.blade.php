@extends(implode('.', [locale(), '_template', 'master']))

@section('page-title')
    Contact > Lodge Helsingfors | Lodge in Patagonia - Los Glaciares National Park - Lake Viedma, Santa Cruz, Argentina
@endsection

@section('meta_description')
    Entre las actividades y excursiones que tenemos opciones Helsingfors ofrece paseos a caballo, senderismo, pesca, fotografía, observación, entre otros.
@endsection

@section('meta')
    <meta name="keywords" content="trekking, hikking, caballo, jinete del caballo, a caballo, senderismo, pesca, fotografía, observación, entre otros,, lodge in patagonia, luxury lodge in patagonia, los glaciares national park, hosteria helsingfors, parque nacional los glaciares, estancia helsingfors, lodge lake viedma,lodge el chalten, lodge el calafate, remote patagonian lodge, active travel, estancia patagonia, horseback riding in patagonia, patagonia trekking, trekking in patagonia, hiking in patagonia, guanaco sighting" />
@endsection

@section('content')

    @include('en._partials.slider', ['page'=>'contact-us'])

    <div class="map">
        <iframe width="100%" height="450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41307.59330885165!2d-72.86990860566224!3d-49.67832646335726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb22a68f6730dfd5a!2sHosteria+Helsingfors!5e0!3m2!1ses-419!2sus!4v1409061101486"></iframe>
    </div>

    <div class="body-wrapper">
        <div class="container">

            <br>

            <div class="text-content">

                <h1 class="title">Lodge Helsingfors</h1>
                <p class="intro">Helsingfors is located on the SW margin of Lake Viedma, in the "Los Glaciares" National Park, Santa Cruz Province.</p>

                <address>
                    <strong>Lodge Helsingfors, Patagonia Argentina | Los Glaciares National Park</strong><br>
                    1355 Market Street, Suite 900<br>
                    San Francisco, CA 94103<br>
                    The Lodge: <abbr title="Phone">P:</abbr> +54 11 - 52770195<br>
                    Booking: <abbr title="Phone">P:</abbr> +54 (9) 2966-675753<br>
                    Email us: <abbr title="Mail">M:</abbr> <a href="mailto:info@helsingfors.com.a">info@helsingfors.com.ar</a>
                </address>

                <br>

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
