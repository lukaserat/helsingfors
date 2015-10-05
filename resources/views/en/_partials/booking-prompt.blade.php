@if(Session::has('success'))
    <a name="booking-response">
        <div class="booking-response-wrapper success">
            <div class="container">
                <h3>Thank you for sending your booking information with us. We will contact you soon.</h3>
            </div>
        </div>
    </a>
@endif

@if($errors->count() > 0)
    <a name="booking-response">
        <div class="booking-response-wrapper error">
            <div class="container">
                <h3>Sorry for the inconvenience, but there is something wrong with your booking information.</h3>
            </div>
        </div>
    </a>
@endif
