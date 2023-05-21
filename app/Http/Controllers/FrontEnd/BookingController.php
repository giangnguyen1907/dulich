<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Booking;
use App\Http\Services\ContentService;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $params['status'] = 'active';
        return $this->responseView('frontend.pages.tour.index');
    }
    
    public function store(Request $request)
    {   
        
        
        try {
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
                // 'department_id' => 'required',
                // 'doctor_id' => 'required',
                // 'booking_date' => 'required'
            ]);
            
            $params = $request->all();
            $params['status'] = 'new';
            //dd($params['tour_id']);

            $params['booking_date'] = ($request->get('booking_date')) ? Carbon::createFromFormat('d-m-Y', $request->get('booking_date')) : null;

            $booking = Booking::create($params);

            // if (isset($this->web_information->information->email)) {
            //     $email = $this->web_information->information->email;
            //     Mail::send('emails.contact', ['contact' => $contact], function ($message) use ($email) {
            //         $message->to($email);
            //         $message->subject(__('You received a new appointment from the system'));
            //     });
            // }

            $messageResult = '';
            $messageResult = $this->web_information->information->notice_advise ?? __('Booking successfull!');

            return redirect()->back()->with('successMessage', __('Đặt vé thành công'));
        } catch (Exception $ex) {
            // throw $ex;
            abort(422, __($ex->getMessage()));
        }
        //return redirect()->back()->with('successMessage', __('Gửi liên hệ thành công'));
    }
}
