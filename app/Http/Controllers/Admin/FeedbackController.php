<?php

namespace App\Http\Controllers\Admin;

use App\Consts;
use App\Http\Services\ContentService;
use App\Models\Feedback;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedBackController extends Controller
{
    public function __construct()
    {
        $this->routeDefault  = 'feedbacks';
        $this->viewPart = 'admin.pages.feedback';
        $this->responseData['module_name'] = __('Feedback Management');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = $request->all();
        $this->responseData['params'] = $params;
       
        $params_tour['status'] = Consts::POST_STATUS['active'];
        $tour = ContentService::getCmsTour($params_tour)->get();
        $this->responseData['tour'] =  $tour;
        // Get list with filter params
        $rows = ContentService::getFeedback($params)->paginate(Consts::DEFAULT_PAGINATE_LIMIT);
        $this->responseData['rows'] =  $rows;

        return $this->responseView($this->viewPart . '.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Do not use this function
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Do not use this function
        return redirect()->back();
    }

   
    public function show(Feedback $feedback)
    {
        // Do not use this function
        return redirect()->back();
    }

   
    public function edit(Feedback $feedback)
    {
        
        $params_tour['status'] = Consts::POST_STATUS['active'];
        $tour = ContentService::getCmsTour($params_tour)->get();
        $this->responseData['tour'] =  $tour;
        $this->responseData['detail'] = $feedback;

        return $this->responseView($this->viewPart . '.edit');
    }

    public function update(Request $request, Feedback $feedback)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'tour_id' => 'required',
        ]);
        $params = $request->all();

       

        $params['admin_updated_id'] = Auth::guard('admin')->user()->id;

        $feedback->fill($params);
        $feedback->save();

        return redirect()->back()->with('successMessage', __('Successfully updated!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();

        return redirect()->back()->with('successMessage', __('Delete record successfully!'));
    }
}
