<?php

namespace App\Http\Controllers\FrontEnd;

use App\Consts;
use App\Http\Services\ContentService;
use App\Models\Contact;
use App\Models\Feedback;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params['status'] = Consts::TAXONOMY_STATUS['active'];
        // $params['taxonomy'] = Consts::TAXONOMY['department'];
        // $this->responseData['departments'] = ContentService::getCmsTaxonomy($params)->get();

        return $this->responseView('frontend.pages.contact.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'is_type' => 'required|max:255'
            ]);

            $params = $request->all();
            $params['status'] = Consts::CONTACT_STATUS['new'];
            $messageResult = '';
            // Case get message
            switch ($params['is_type']) {
                case Consts::CONTACT_TYPE['newsletter']:
                    $messageResult = $this->web_information->information->notice_newsletter ?? __('Subscribe newsletter successfully!');
                    break;
                case Consts::CONTACT_TYPE['advise']:
                    $messageResult = $this->web_information->information->notice_advise ?? __('Booking successfull!');
                    break;
                case Consts::CONTACT_TYPE['faq']:
                    $messageResult = $this->web_information->information->notice_faq ?? __('Send contact successfully!');
                    break;
                case Consts::CONTACT_TYPE['call_request']:
                    $messageResult = $this->web_information->information->call_request ?? __('Send call request successfully!');
                    break;
                default:
                    $messageResult = $this->web_information->information->notice_contact ?? __('Send contact successfully!');
                    break;
            }
            if ($params['is_type'] == Consts::CONTACT_TYPE['newsletter']) {
                $contact = Contact::firstOrCreate(
                    [
                        'is_type' => $params['is_type'],
                        'email' => $params['email']
                    ]
                );

                return redirect()->back()->with('successMessage', __('Gửi liên hệ thành công'));
            } else {
                $contact = Contact::create($params);
                // if ($params['is_type'] == Consts::CONTACT_TYPE['advise'] || $params['is_type'] == Consts::CONTACT_TYPE['contact']) {
                //     if (isset($this->web_information->information->email)) {
                //         $email = $this->web_information->information->email;
                //         Mail::send('frontend.emails.contact', ['contact' => $contact], function ($message) use ($email) {
                //             $message->to($email);
                //             $message->subject(__('You received a new appointment from the system'));
                //         });
                //     }
                // }

                return redirect()->back()->with('successMessage', __('Gửi liên hệ thành công'));
            }
        } catch (Exception $ex) {
            // throw $ex;
            abort(422, __($ex->getMessage()));
        }
    }

    public function feedback(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'tour_id' => 'required',
            ]);

            $targetDir = "images/feedback/";
            //$allowTypes = array('jpg','png','jpeg','gif');
            if (!file_exists($targetDir)) {
                if (mkdir($targetDir)) {
                    //echo "Tạo thư mục thành công.";
                }
            }

            if ($_FILES['image']['name']) {
                $request->validate([
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $imageName = time() . '.' . $request->image->extension();

                $request->image->move(public_path($targetDir), $imageName);

                $path_image = $targetDir . $imageName;
            }
             
            $params = $request->all();
            $params['status'] = 'new';
            $params['image'] = $path_image;



            $feedback = Feedback::create($params);

            // if (isset($this->web_information->information->email)) {
            //     $email = $this->web_information->information->email;
            //     Mail::send('emails.contact', ['contact' => $contact], function ($message) use ($email) {
            //         $message->to($email);
            //         $message->subject(__('You received a new appointment from the system'));
            //     });
            // }

            $messageResult = '';
            $messageResult = $this->web_information->information->notice_advise ?? __('Feedback successfull!');

            return redirect()->back()->with('successMessage', __('Gửi phản hồi thành công'));
        } catch (Exception $ex) {
            // throw $ex;
            abort(422, __($ex->getMessage()));
        }
    }
}
