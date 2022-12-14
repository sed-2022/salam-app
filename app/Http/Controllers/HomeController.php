<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\HouseReservation;
use App\Models\PeriodicReport;
use App\Models\VisitAppointment;

use App\Models\VisitorSelectHouse;

use App\Models\HomePageSettings;

use App\Models\ProjectPageSettings;

use App\Models\FundingPageSettings;

use App\Models\InvolvedCompany;

use App\Models\SucessPartners;

use App\Models\HouseDetailsImages;
use App\Models\HouseDetails;
use App\Models\HousesImageGallery;
use App\Models\ProjectImageGallery;



use Illuminate\Http\Request;




use App\Models\User;

use App\Notifications\UserNotification;


//use Notification;

use Illuminate\Support\Facades\Notification;

use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home_settings = HomePageSettings::find(1);

        $involved_company_settings = InvolvedCompany::orderBy('created_at', 'desc')->get();

        $success_partners_settings = SucessPartners::orderBy('created_at', 'desc')->get();

        return view('welcome', compact('home_settings', 'involved_company_settings', 'success_partners_settings'));
    }


    public function SchemeImageGallery()
    {
        $all_images = ProjectImageGallery::all();
        $user = auth()->user();

        return view('pages.scheme-image-gallery', compact('all_images', 'user'));
    }

    public function ImageGallery()
    {
        $all_images = HousesImageGallery::all();
        $user = auth()->user();

        return view('pages.image-gallery', compact('all_images', 'user'));
    }



    public function ProjectScheme()
    {
        $house_units_A = HouseReservation::where('type', 'A')->orderBy('id', 'desc')->get();

        $house_units_B = HouseReservation::where('type', 'B')->orderBy('id', 'desc')->get();

        $house_units_C = HouseReservation::where('type', 'C')->orderBy('id', 'desc')->get();

        $home_settings = HomePageSettings::find(1);

        $project_page_settings = ProjectPageSettings::find(1);

        return view('pages.project-scheme', compact('home_settings', 'project_page_settings', 'house_units_A', 'house_units_B', 'house_units_C'));
    }

    public function ContactUs()
    {
        return view('pages.contact-us');
    }

    public function ContactUsForm(Request $request)
    {
        // Form validation

        /**
         *    $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required',
        ]);
         * 
         */
        //  Store data in database
        ContactUs::create($request->all());

        /**
         * 
         *         Mail::send(
            'email.mail',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'user_query' => $request->get('message'),
            ),
            function ($message) use ($request) {
                $message->from($request->get('email'));
                $message->to('salam.hielz@gmail.com', 'Admin')->subject("?????????? ???? ?????????? ???????? ??????");
            }
        );
         * 
         */

        $details = [
            'icon' => 'bi-envelope',
            'title' => '?????? ???????? ???????? ???????????? ???????? ?????????? ??????????',
            'name' => '??????????:' . $request->get('name'),
            'user_email' => "???????????? ????????????????????:" . $request->get('email'),
            'phone' =>  "?????? ????????????:" . $request->get('phone'),
            'body' => "????????????:" . $request->get('message'),
            'box-style' => 'box-information',
            'actionText' => "???????????????? ?????? ???????? ??????????????",
            'actionURL' => url('/all-contactus-messages'),
            'user_id' => 1,
        ];

        $targetUser = User::find(1);

        Notification::send($targetUser, new UserNotification($details));

        return back()->with('success', '?????? ???? ???????????? ?????????????? ?????????? ?????????????? ????????.');
    }

    public function FundingCompanies()
    {
        $funding_page_settings = FundingPageSettings::all();

        return view('pages.funding-companies', compact('funding_page_settings'));
    }

    public function HousesUnits()
    {

        $home_settings = HomePageSettings::find(1);

        return view('pages.houses-units', compact('home_settings'));
    }

    public function PeriodicReports()
    {

        $reports = PeriodicReport::orderBy('updated_at', 'desc')->paginate(20);

        return view('pages.periodic-reports', compact('reports'));
    }

    public function PrototypA()
    {
        $home_settings = HomePageSettings::find(1);

        $ground_floor_list = HouseDetails::where(['section' => "ground-floor", "type" => "A"])->get();

        $first_floor_list = HouseDetails::where(['section' => "first-floor", "type" => "A"])->get();

        $second_floor_list = HouseDetails::where(['section' => "second-floor", "type" => "A"])->get();


        $ground_floor_img = HouseDetailsImages::firstWhere(['section' => "ground-floor", "type" => "A"]);

        $first_floor_img = HouseDetailsImages::firstWhere(['section' => "first-floor", "type" => "A"]);

        $second_floor_img = HouseDetailsImages::firstWhere(['section' => "second-floor", "type" => "A"]);


        return view('pages.prototyp-A', compact('home_settings', 'ground_floor_list', 'first_floor_list', 'second_floor_list', 'ground_floor_img', 'first_floor_img', 'second_floor_img'));
    }

    public function PrototypB()
    {

        $home_settings = HomePageSettings::find(1);

        $ground_floor_list = HouseDetails::where(['section' => "ground-floor", "type" => "B"])->get();

        $first_floor_list = HouseDetails::where(['section' => "first-floor", "type" => "B"])->get();

        $second_floor_list = HouseDetails::where(['section' => "second-floor", "type" => "B"])->get();


        $ground_floor_img = HouseDetailsImages::firstWhere(['section' => "ground-floor", "type" => "B"]);

        $first_floor_img = HouseDetailsImages::firstWhere(['section' => "first-floor", "type" => "B"]);

        $second_floor_img = HouseDetailsImages::firstWhere(['section' => "second-floor", "type" => "B"]);


        return view('pages.prototyp-B', compact('home_settings', 'ground_floor_list', 'first_floor_list', 'second_floor_list', 'ground_floor_img', 'first_floor_img', 'second_floor_img'));
    }

    public function PrototypC()
    {
        $home_settings = HomePageSettings::find(1);


        $ground_floor_list = HouseDetails::where(['section' => "ground-floor", "type" => "C"])->get();

        $first_floor_list = HouseDetails::where(['section' => "first-floor", "type" => "C"])->get();

        $second_floor_list = HouseDetails::where(['section' => "second-floor", "type" => "C"])->get();

        $ground_floor_img = HouseDetailsImages::firstWhere(['section' => "ground-floor", "type" => "C"]);

        $first_floor_img = HouseDetailsImages::firstWhere(['section' => "first-floor", "type" => "C"]);

        $second_floor_img = HouseDetailsImages::firstWhere(['section' => "second-floor", "type" => "C"]);


        return view('pages.prototyp-C', compact('home_settings',  'ground_floor_list', 'first_floor_list', 'second_floor_list', 'ground_floor_img', 'first_floor_img', 'second_floor_img'));
    }

    public function ReserveAppoinment()
    {
        return view('pages.reserve-appoinment');
    }

    public function MakeAppoinment(Request $request)
    {
        VisitAppointment::create($request->all());

        $details = [
            'icon' => 'bi-calendar-check',
            'title' => '?????? ???????? ???????? ???????????? ???????? ???????? ?????????? ???????? ???????????? ' . $request->get('date'),
            'body' =>
            '?????????? ??????????????:' .
                $request->get('fullName') .
                ' || ????????????: ' . $request->get('phone') .
                ' || ?????? ????????????: ' . $request->get('team_no') .
                ' || ??????????????: ' . $request->get('date') .
                ' || ??????????: ' . $request->get('time'),
            'box-style' => 'box-warning',
            'actionText' => "???????????????? ?????? ???????? ????????????????",
            'actionURL' => url('/all-appointments-list'),
            'user_id' => 1,
        ];

        $targetUser = User::find(1);

        Notification::send($targetUser, new UserNotification($details));

        return back()->with('success', '?????? ???? ?????? ?????????? ?????????? ?????????????? ????????.');
    }

    public function ReserveHouse()
    {
        return view('pages.reserve-house');
    }


    public function VisitorChooseHouse(Request $request)
    {

        VisitorSelectHouse::create($request->all());

        $details = [
            'icon' => 'bi-star',
            'title' => '?????? ?????? ???????? ?????????????? ?????? ???? ?????????????? ' . $request->get('type'),
            'body' =>
            '?????????? ??????????????:' .
                $request->get('fullName') .
                ' || ????????????: ' . $request->get('phone') .
                ' || ?????? ????????????: ' . $request->get('type'),
            'box-style' => 'box-error',
            'actionText' => "???????????????? ?????? ???????? ?????????????? ????????????????",
            'actionURL' => url('/all-visitors-choises'),
            'user_id' => 1,
        ];

        $targetUser = User::find(1);

        Notification::send($targetUser, new UserNotification($details));

        return back()->with('success', '?????? ???? ?????????? ?????????? ?????????? ?????????????? ????????.');
    }
}
