<?php


namespace App\Http\Controllers;



use App\Http\Requests\BookingPostRequest;
use App\Models\Booking;

class BookingController extends Controller
{


    /**
     * postBooking
     *
     *
     * @param BookingPostRequest $request
     * @param Booking $booking
     * @access  public
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postBooking(BookingPostRequest $request, Booking $booking)
    {
        $booking->create($request->all());

        return redirect()->with(['success'=>true]);
    }

}
