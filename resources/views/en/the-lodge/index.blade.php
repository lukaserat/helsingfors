@extends(implode('.', [locale(), '_template', 'master']))

@section('page-title')
    Lodge Helsingfors | Lodge in Patagonia - Los Glaciares National Park - Lake Viedma, Santa Cruz, Argentina
@endsection

@section('meta_description')
    A unique destination an unforgettable lodge
@endsection

@section('meta')
    <meta name="keywords" content="lodge in patagonia, luxury lodge in patagonia, los glaciares national park, hosteria helsingfors, parque nacional los glaciares, estancia helsingfors, lodge lake viedma,lodge el chalten, lodge el calafate, remote patagonian lodge, active travel, estancia patagonia, horseback riding in patagonia, patagonia trekking, trekking in patagonia, hiking in patagonia, guanaco sighting" />
@endsection

@section('content')

    @include('en._partials.slider', ['page'=>'lodge'])

    <div class="body-wrapper">
        <div class="container">

            <br>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-9"> <!-- MAIN CONTENT -->


                        <div class="text-content">

                            <h1 class="title">THE LODGE HELSINGFORS</h1>

                            <p class="intro">A unique destination in Patagonia, a place of incredible beauty with exclusive services and a sophisticated regional
                                cuisine HELSINGFORS make an unforgettable place.</p>

                            <div class="img-wrapper">
                                <img src="{{asset('images/hosteria/imagen_texto1.jpg')}}" alt="">
                            </div>

                            <p>During the early XX century, a Finnish adventurer, Alfred Ranström, settled at the foot of the Andes Mountains, on
                                the SW shores of Lago Viedma. As a memory of his fatherland, he named his estancia after his country's capital city:
                                Helsingfors (Helsinki in Swedish). Here he lived with his wife, Marie Lisau and their children, lightening up this wonderful
                                spot, never imagining that they would be the main characters in one of Patagonia's most touching stories. During the 60's,
                                a traditional family from the province of Santa Cruz bought this beautiful land, and since 1995 they have been receiving
                                visitors from all over the world who wish to discover Patagonia through a unique and exclusive experience such as we
                                offer at Helsingfors.</p>

                            <p>The lodge is surrounded by a majestic natural landscape, protected by lush woods which give way to a panoramic view of the lake, Mount Fitz Roy and the Andes Mountains.</p>

                            <p>It has 9 rooms with a private bathroom, decorated and designed with an exquisite taste, combining colors and textures that blend in with the environment.</p>

                            <p>Guests share their experiences around a large fireplace in the living area or enjoying a drink at the bar.</p>

                            <p>A refined cellar with selected Argentine wines accompanies the delights of a sophisticated regional cuisine.</p>

                            <br>

                            <h4 class="subtitle">Uniqueness:</h4>
                            <ul>
                                <li>Located in Los Glaciares National Park</li>
                                <li>Nine exquisitely decorated rooms (some have whirlpool baths and others have Scottish showers)</li>
                                <li>Regular transfers from El Calafate on pre-specified days</li>
                                <li>Sophisticated regional cuisine</li>
                                <li>Open November through April.</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xs-3"> <!-- SIDE PICTURES -->

                        <div class="side-pictures">


                            <ul class="list-unstyled">
                                <li>
                                    <div class="img-wrapper">
                                        <img src="{{asset('images/hosteria/detalle1.jpg')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="img-wrapper">
                                        <img src="{{asset('images/hosteria/detalle2.jpg')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="img-wrapper">
                                        <img src="{{asset('images/hosteria/detalle3.jpg')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="img-wrapper">
                                        <img src="{{asset('images/hosteria/detalle3.jpg')}}" alt="">
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
