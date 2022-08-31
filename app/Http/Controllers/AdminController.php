<?php

namespace App\Http\Controllers;

use App\Exports\ContactUsExport;
use App\Exports\HousesReservationsExport;
use App\Exports\VisitAppointmentExport;

use App\Exports\VisitorsChoicesExport;

use App\Models\ContactUs;
use App\Models\FundingPageSettings;
use App\Models\HomePageSettings;
use App\Models\HouseReservation;
use App\Models\PeriodicReport;
use App\Models\ProjectPageSettings;
use App\Models\VisitAppointment;
use App\Models\VisitorSelectHouse;

use App\Models\InvolvedCompany;
use App\Models\SucessPartners;
use App\Models\User;
use App\Models\HouseDetails;
use App\Models\HouseDetailsImages;
use App\Models\HousesImageGallery;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;

use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

//use Mail;

use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        /**$this->middleware('guest'); */
        $this->middleware('auth');
    }

    public function account()
    {
        $user = auth()->user();

        return view('admin-dashboard.account', compact('user'));
    }


    public function UpdateAdminAccount(Request $request)
    {
        $admin = User::find(1);

        //$current_passord = $request->get('current_password');
        //$new_password = $request->get('new_password');
        //$confirm_password = $request->get('confirm_new_password');

        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        //$admin->update($inputs);

        User::find(1)->update(['password' => Hash::make($request->new_password)]);

        return back()->with('success', 'تم تحديث بيانات الأدمن');
    }

    public function AppointmentsList()
    {
        $user = auth()->user();

        $visit_appointments = VisitAppointment::orderBy('id', 'desc')->where('isRead', 1)->paginate(20);

        $visit_appointments_unread_list = VisitAppointment::where('isRead', 0)->get();

        return view('admin-dashboard.appointments-list', compact('user', 'visit_appointments_unread_list', 'visit_appointments'));
    }

    public function markAppointmentAsRead()
    {

        $visit_appointments_unread_list = VisitAppointment::where('isRead', 0)->get();

        foreach ($visit_appointments_unread_list as $vItem) {

            $vItem->update(["isRead" => 1]);
        }

        return response()->noContent();
    }

    public function HousingList($type)
    {
        $user = auth()->user();

        $house_units = HouseReservation::where('type', $type)->orderBy('id', 'desc')->get();

        $house_units = $house_units->split(3);

        return view('admin-dashboard.housing-settings-list', compact('user', 'type', 'house_units'));
    }

    public function UpdateHousingList(Request $request, $type)
    {

        if ($type == "A") {

            for ($i = 1; $i < 1001; $i++) {

                $current_house = HouseReservation::find($i);

                $inputs = ['isAvailable' => $request->get('A-' . $i) ? true : false];

                $current_house->update($inputs);
            }
        } else if ($type == "B") {

            for ($i = 1001; $i < 2001; $i++) {

                $current_house = HouseReservation::find($i);

                $inputs = ['isAvailable' => $request->get('B-' . $i) ? true : false];

                $current_house->update($inputs);
            }
        } else {
            for ($i = 2001; $i < 3001; $i++) {

                $current_house = HouseReservation::find($i);

                $inputs = ['isAvailable' => $request->get('C-' . $i) ? true : false];

                $current_house->update($inputs);
            }
        }

        return back()->with('success', 'تم تحديث نموذج الفلل ' . $type);
    }

    public function ExportReservations()
    {

        Mail::send('email.export-housese-reservations', [], function ($message) { //$attachment = Excel::download(new OrdersExport, 'orders.xlsx');

            $message->to(auth()->user()->email)
                ->subject('تصدير جميع حجوزات المنازل')
                ->attach(
                    Excel::download(
                        new HousesReservationsExport,
                        'houses_reservations.xlsx'
                    )->getFile(),
                    ['as' => 'houses_reservations.xlsx']
                );

            ob_end_clean();
        });

        return redirect()->back();
    }

    public function DownloadReservations()
    {
        return Excel::download(new HousesReservationsExport, 'houses_reservations.xlsx');
    }

    public function ExportAppointments()
    {

        Mail::send('email.export-vistis-appointments', [], function ($message) { //$attachment = Excel::download(new OrdersExport, 'orders.xlsx');

            $message->to(auth()->user()->email)
                ->subject('تصدير جميع مواعيد الزيارة')
                ->attach(
                    Excel::download(
                        new VisitAppointmentExport,
                        'all_appointments.xlsx'
                    )->getFile(),
                    ['as' => 'all_appointments.xlsx']
                );

            ob_end_clean();
        });

        //$attachment = Excel::download(new HousesReservationsExport, 'houses_reservations.xlsx');

        return redirect()->back();
    }

    public function DownloadAppointments()
    {
        return Excel::download(new VisitAppointmentExport, 'all_appointments.xlsx');
    }

    public function ExportCotacts()
    {

        Mail::send('email.export-contact-messages', [], function ($message) { //$attachment = Excel::download(new OrdersExport, 'orders.xlsx');

            $message->to(auth()->user()->email)
                ->subject('تم تصدير جميع الرسائل')
                ->attach(
                    Excel::download(
                        new ContactUsExport,
                        'all_contact_messages.xlsx'
                    )->getFile(),
                    ['as' => 'all_contact_messages.xlsx']
                );

            ob_end_clean();
        });

        return redirect()->back();
    }

    public function DownloadCotacts()
    {
        return Excel::download(new ContactUsExport, 'all_contact_messages.xlsx');
    }



    public function ExportVitorsList()
    {

        Mail::send('email.export-visitors-selected-houses', [], function ($message) { //$attachment = Excel::download(new OrdersExport, 'orders.xlsx');

            $message->to(auth()->user()->email)
                ->subject('تم تصدير جميع الرسائل')
                ->attach(
                    Excel::download(
                        new VisitorsChoicesExport,
                        'visitors_selected_houses.xlsx'
                    )->getFile(),
                    ['as' => 'visitors_selected_houses.xlsx']
                );

            ob_end_clean();
        });

        return redirect()->back();
    }

    public function DownloadVitorsList()
    {
        return Excel::download(new VisitorsChoicesExport, 'visitors_selected_houses.xlsx');
    }




    public function ContactUsList()
    {
        $user = auth()->user();

        $contactUs_list = ContactUs::orderBy('updated_at', 'desc')->where('isRead', 1)->paginate(20);

        $contactUs_list_unread_list = ContactUs::where('isRead', 0)->get();


        $toal_messages = count(ContactUs::all());

        $toal_read_messages = count(ContactUs::where('isRead', 1)->get());


        return view('admin-dashboard.contact-us-list', compact('user', 'contactUs_list_unread_list', 'contactUs_list', 'toal_messages', 'toal_read_messages'));
    }

    public function markContactUsAsRead()
    {

        $contactUs_list_unread_list = ContactUs::where('isRead', 0)->get();

        foreach ($contactUs_list_unread_list as $msg) {

            $msg->update(["isRead" => 1]);
        }

        return response()->noContent();
    }

    public function PeriodicReportsSettings()
    {
        $user = auth()->user();

        $reports = PeriodicReport::orderBy('updated_at', 'desc')->paginate(20);

        return view('admin-dashboard.peripdic-reports-settings', compact('user', 'reports'));
    }

    public function AddReport(Request $request)
    {

        $inputs = [
            'title' => $request->get('title'),
            'brief' => $request->get('brief'),
            'link' => $this->getEmbedUrl($request->get('youtube-video')),
        ];

        PeriodicReport::create($inputs);

        return back()->with('success', 'تم إضافة التقرير الدوري');
    }

    public function EditReport(Request $request, $id)
    {
        $p_report = PeriodicReport::find($id);
        $inputs = [
            'title' => $request->get('title'),
            'brief' => $request->get('brief'),
            'link' => $this->getEmbedUrl($request->get('youtube-video')),
        ];

        $p_report->update($inputs);

        return back()->with('success', 'تم تعديل التقرير الدوري');
    }

    public function DestroyReport($id)
    {

        $report = PeriodicReport::find($id);

        $report->delete();

        return back()->with('success-delete', 'تم حذف الفيديو');
    }

    public function newNotifications()
    {
        $user = auth()->user();
        $notifications = auth()->user()->unreadNotifications;
        $read_notifications = auth()->user()->readNotifications;
        return view('admin-dashboard.notifications', compact('user', 'notifications', 'read_notifications'));
    }

    public function markNotificationAsRead(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }

    public function VisitorsChoisesList()
    {
        $user = auth()->user();

        $vistorsChoices_list = VisitorSelectHouse::orderBy('id', 'desc')->where('isRead', 1)->paginate(20);

        $vistorsChoices_unread_list = VisitorSelectHouse::where('isRead', 0)->get();

        $total_As =  count(VisitorSelectHouse::where('type', "A")->get());
        $total_Bs =  count(VisitorSelectHouse::where('type', "B")->get());
        $total_Cs =  count(VisitorSelectHouse::where('type', "C")->get());

        $total_all =  count(VisitorSelectHouse::where('type', "الجميع")->get());

        return view('admin-dashboard.visitors-choises-list', compact('vistorsChoices_unread_list', 'user', 'vistorsChoices_list', 'total_As', 'total_Bs', 'total_Cs', 'total_all'));
    }

    public function markVistorsReserationsAsRead()
    {

        $vistorsChoices_unread_list = VisitorSelectHouse::where('isRead', 0)->get();

        foreach ($vistorsChoices_unread_list as $rv) {

            $rv->update(["isRead" => 1]);
        }

        return response()->noContent();
    }

    public function allSettings()
    {
        $user = auth()->user();
        return view('admin-dashboard.settings.all-settings', compact('user'));
    }

    public function NavigateHomeSettings()
    {
        $user = auth()->user();

        $home_settings = HomePageSettings::find(1);

        return view('admin-dashboard.settings.home-page-settings', compact('home_settings', 'user'));
    }

    public function EditHomeSettings(Request $request)
    {

        $home_settings = HomePageSettings::find(1);

        $data = $request->all();

        if ($request->hasFile('pdf_file')) {

            $file_old = public_path('storage/images_stduio/' . $home_settings->pdf_file);

            if (File::exists($file_old) && $home_settings->pdf_file != "apple-touch-plant-fill.png") {
                unlink($file_old);
            }

            $name = $request->file('pdf_file')->hashName();

            $path = $request->file('pdf_file')->storeAs('public/images_stduio/', $name);

            $data["pdf_file"] = $name;
        } else {

            $data["pdf_file"] = $home_settings->pdf_file;
        }

        if ($request->hasFile('first_slider_photo')) {

            $file_old = public_path('storage/images_stduio/' . $home_settings->first_slider_photo);

            if (File::exists($file_old) && $home_settings->first_slider_photo != "main-header.jpg") {
                unlink($file_old);
            }

            $name = $request->file('first_slider_photo')->hashName();

            $path = $request->file('first_slider_photo')->storeAs('public/images_stduio/', $name);

            $data["first_slider_photo"] = $name;
        } else {

            $data["first_slider_photo"] = $home_settings->first_slider_photo;
        }

        if ($request->hasFile('second_slider_photo')) {

            $file_old = public_path('storage/images_stduio/' . $home_settings->second_slider_photo);

            if (File::exists($file_old) && $home_settings->second_slider_photo != "main-header.jpg") {
                unlink($file_old);
            }

            $name = $request->file('second_slider_photo')->hashName();

            $path = $request->file('second_slider_photo')->storeAs('public/images_stduio/', $name);

            $data["second_slider_photo"] = $name;
        } else {

            $data["second_slider_photo"] = $home_settings->second_slider_photo;
        }

        if ($request->hasFile('third_slider_photo')) {

            $file_old = public_path('storage/images_stduio/' . $home_settings->third_slider_photo);

            if (File::exists($file_old) && $home_settings->third_slider_photo != "main-header.jpg") {
                unlink($file_old);
            }

            $name = $request->file('third_slider_photo')->hashName();

            $path = $request->file('third_slider_photo')->storeAs('public/images_stduio/', $name);

            $data["third_slider_photo"] = $name;
        } else {

            $data["third_slider_photo"] = $home_settings->third_slider_photo;
        }

        if ($request->hasFile('about_sabya_photo')) {

            $file_old = public_path('storage/images_stduio/' . $home_settings->about_sabya_photo);

            if (File::exists($file_old) && $home_settings->about_sabya_photo != "about-sabya.jpg") {
                unlink($file_old);
            }

            $name = $request->file('about_sabya_photo')->hashName();

            $path = $request->file('about_sabya_photo')->storeAs('public/images_stduio/', $name);

            $data["about_sabya_photo"] = $name;
        } else {

            $data["about_sabya_photo"] = $home_settings->about_sabya_photo;
        }

        if ($request->hasFile('about_developer_photo')) {

            $file_old = public_path('storage/images_stduio/' . $home_settings->about_developer_photo);

            if (File::exists($file_old) && $home_settings->about_developer_photo != "about-developer.jpg") {
                unlink($file_old);
            }

            $name = $request->file('about_developer_photo')->hashName();

            $path = $request->file('about_developer_photo')->storeAs('public/images_stduio/', $name);

            $data["about_developer_photo"] = $name;
        } else {

            $data["about_developer_photo"] = $home_settings->about_developer_photo;
        }

        if ($request->hasFile('protoype_A_photo')) {

            $file_old = public_path('storage/images_stduio/' . $home_settings->protoype_A_photo);

            if (File::exists($file_old) && $home_settings->protoype_A_photo != "inner_projects_01.jpg") {
                unlink($file_old);
            }

            $name = $request->file('protoype_A_photo')->hashName();

            $path = $request->file('protoype_A_photo')->storeAs('public/images_stduio/', $name);

            $data["protoype_A_photo"] = $name;
        } else {

            $data["protoype_A_photo"] = $home_settings->protoype_A_photo;
        }

        if ($request->hasFile('protoype_A_pdf')) {

            $file_old = public_path('storage/images_stduio/' . $home_settings->protoype_A_pdf);

            if (File::exists($file_old) && $home_settings->protoype_A_pdf != "apple-touch-plant-fill.png") {
                unlink($file_old);
            }

            $name = $request->file('protoype_A_pdf')->hashName();

            $path = $request->file('protoype_A_pdf')->storeAs('public/images_stduio/', $name);

            $data["protoype_A_pdf"] = $name;
        }

        if ($request->hasFile('protoype_B_pdf')) {

            $file_old = public_path('storage/images_stduio/' . $home_settings->protoype_B_pdf);

            if (File::exists($file_old) && $home_settings->protoype_B_pdf != "apple-touch-plant-fill.png") {
                unlink($file_old);
            }

            $name = $request->file('protoype_B_pdf')->hashName();

            $path = $request->file('protoype_B_pdf')->storeAs('public/images_stduio/', $name);

            $data["protoype_B_pdf"] = $name;
        }

        if ($request->hasFile('protoype_C_pdf')) {

            $file_old = public_path('storage/images_stduio/' . $home_settings->protoype_C_pdf);

            if (File::exists($file_old) && $home_settings->protoype_C_pdf != "apple-touch-plant-fill.png") {
                unlink($file_old);
            }

            $name = $request->file('protoype_C_pdf')->hashName();

            $path = $request->file('protoype_C_pdf')->storeAs('public/images_stduio/', $name);

            $data["protoype_C_pdf"] = $name;
        }

        if ($request->hasFile('protoype_B_photo')) {

            $file_old = public_path('storage/images_stduio/' . $home_settings->protoype_B_photo);

            if (File::exists($file_old) && $home_settings->protoype_B_photo != "inner_projects_02.jpg") {
                unlink($file_old);
            }

            $name = $request->file('protoype_B_photo')->hashName();

            $path = $request->file('protoype_B_photo')->storeAs('public/images_stduio/', $name);

            $data["protoype_B_photo"] = $name;
        } else {

            $data["protoype_B_photo"] = $home_settings->protoype_B_photo;
        }

        if ($request->hasFile('protoype_C_photo')) {

            $file_old = public_path('storage/images_stduio/' . $home_settings->protoype_C_photo);

            if (File::exists($file_old) && $home_settings->protoype_C_photo != "inner_projects_03.jpg") {
                unlink($file_old);
            }

            $name = $request->file('protoype_C_photo')->hashName();

            $path = $request->file('protoype_C_photo')->storeAs('public/images_stduio/', $name);

            $data["protoype_C_photo"] = $name;
        } else {

            $data["protoype_C_photo"] = $home_settings->protoype_C_photo;
        }

        if ($request->hasFile('promotional_section')) {

            $file_old = public_path('storage/images_stduio/' . $home_settings->promotional_section);

            if (File::exists($file_old) && $home_settings->promotional_section != "promotion.jpg") {
                unlink($file_old);
            }

            $name = $request->file('promotional_section')->hashName();

            $path = $request->file('promotional_section')->storeAs('public/images_stduio/', $name);

            $data["promotional_section"] = $name;
        } else {

            $data["promotional_section"] = $home_settings->promotional_section;
        }

        $home_settings->update($data);

        return back()->with('success', 'تم تعديل الصفحة الرئيسية');
    }

    public function NavigateProjectPageSettings()
    {
        $user = auth()->user();

        $project_page_settings = ProjectPageSettings::find(1);

        return view('admin-dashboard.settings.project-scheme-settings', compact('project_page_settings', 'user'));
    }

    public function EditProjectPageSettings(Request $request)
    {
        $data = $request->all();

        $project_page_settings = ProjectPageSettings::find(1);

        if ($request->hasFile('pdf_file')) {

            $file_old = public_path('storage/images_stduio/' . $project_page_settings->pdf_file);

            if (File::exists($file_old) && $project_page_settings->pdf_file != "apple-touch-plant-fill.png") {
                unlink($file_old);
            }

            $name = $request->file('pdf_file')->hashName();

            $path = $request->file('pdf_file')->storeAs('public/images_stduio/', $name);

            $data["pdf_file"] = $name;
        } else {

            $data["pdf_file"] = $project_page_settings->pdf_file;
        }

        if ($request->hasFile('scheme_img')) {

            $file_old = public_path('storage/images_stduio/' . $project_page_settings->scheme_img);

            if (File::exists($file_old) && $project_page_settings->scheme_img != "schem-map.jpg") {
                unlink($file_old);
            }

            $name = $request->file('scheme_img')->hashName();

            $path = $request->file('scheme_img')->storeAs('public/images_stduio/', $name);

            $data["scheme_img"] = $name;
        } else {

            $data["scheme_img"] = $project_page_settings->scheme_img;
        }

        $project_page_settings->update($data);

        return back()->with('success', 'تم تعديل صفحة مخطط المشروع');
    }

    public function NavigateFundingPageSettings()
    {
        $user = auth()->user();

        $funding_page_settings = FundingPageSettings::orderBy('created_at', 'desc')->get();

        return view('admin-dashboard.settings.funding-companies-settings', compact('funding_page_settings', 'user'));
    }

    public function EditFundingPageSettings(Request $request)
    {

        $data = $request->all();

        if ($request->hasFile('logo')) {

            $name = $request->file('logo')->hashName();

            $path = $request->file('logo')->storeAs('public/images_stduio/', $name);

            $data["logo"] = $name;
        }

        FundingPageSettings::create($data);

        return back()->with('success', 'تم إضافة شعار إلى صفحة الجهات التمويلية');
    }

    public function DeleteLogo($id)
    {

        $funding_page_settings = FundingPageSettings::find($id);

        $file_old = public_path('storage/images_stduio/' . $funding_page_settings->logo);

        if (File::exists($file_old) && $funding_page_settings->logo != "client-1.png") {
            unlink($file_old);
        }

        $funding_page_settings->delete();

        return back()->with('success', 'تم حذف الشعار من صفحة الجهات التمويلية');
    }

    public function NavigateInvolvedCompanySettings()
    {
        $user = auth()->user();

        $involved_company_settings = InvolvedCompany::orderBy('created_at', 'desc')->get();

        return view('admin-dashboard.settings.involved-compamy-settings', compact('involved_company_settings', 'user'));
    }


    public function NavigatePartenersSettings()
    {
        $user = auth()->user();

        $success_partners_settings = SucessPartners::orderBy('created_at', 'desc')->get();


        return view('admin-dashboard.settings.involved-partners-settings', compact('success_partners_settings', 'user'));
    }

    public function EditInvolvedCompanySettings(Request $request)
    {

        $data = $request->all();

        if ($request->hasFile('logo')) {

            $name = $request->file('logo')->hashName();

            $path = $request->file('logo')->storeAs('public/images_stduio/', $name);

            $data["logo"] = $name;
        }

        InvolvedCompany::create($data);

        return back()->with('success', 'تم إضافة شعار إلى صفحة الجهات التمويلية');
    }

    public function DeleteInvolvedCompanyLogo($id)
    {

        $involved_company_settings = InvolvedCompany::find($id);

        $file_old = public_path('storage/images_stduio/' . $involved_company_settings->logo);

        if (File::exists($file_old) && $involved_company_settings->logo != "client2-1.png" && $involved_company_settings->logo != "client2-4.png") {
            unlink($file_old);
        }

        $involved_company_settings->delete();

        return back()->with('success', 'تم حذف الشعار من الصفحة الرئيسية');
    }


    public function EditSucessPartnersSettings(Request $request)
    {

        $data = $request->all();

        if ($request->hasFile('logo')) {

            $name = $request->file('logo')->hashName();

            $path = $request->file('logo')->storeAs('public/images_stduio/', $name);

            $data["logo"] = $name;
        }

        SucessPartners::create($data);

        return back()->with('success', 'تم إضافة شعار إلى صفحة الجهات التمويلية');
    }



    public function DeleteSucessPartnersLogo($id)
    {

        $success_partners_settings = SucessPartners::find($id);

        $file_old = public_path('storage/images_stduio/' . $success_partners_settings->logo);

        if (
            File::exists($file_old) && $success_partners_settings->logo != "client-1.png"
            && $success_partners_settings->logo != "client-2.png" && $success_partners_settings->logo != "client-3.png"
            && $success_partners_settings->logo != "client-4.png" && $success_partners_settings->logo != "client-5.png"
            && $success_partners_settings->logo != "client-6.png"
        ) {
            unlink($file_old);
        }

        $success_partners_settings->delete();

        return back()->with('success', 'تم حذف الشعار من الصفحة الرئيسية');
    }



    public function DeleteHouseDetailRow($id)
    {

        $detail_row = HouseDetails::find($id);

        $detail_row->delete();

        return back();
    }

    public function HousesDetilasA()
    {
        $user = auth()->user();

        $ground_floor_list = HouseDetails::where(['section' => "ground-floor", "type" => "A"])->get();

        $first_floor_list = HouseDetails::where(['section' => "first-floor", "type" => "A"])->get();

        $second_floor_list = HouseDetails::where(['section' => "second-floor", "type" => "A"])->get();


        $ground_floor_img = HouseDetailsImages::firstWhere(['section' => "ground-floor", "type" => "A"]);

        $first_floor_img = HouseDetailsImages::firstWhere(['section' => "first-floor", "type" => "A"]);

        $second_floor_img = HouseDetailsImages::firstWhere(['section' => "second-floor", "type" => "A"]);


        return view('admin-dashboard.houses_A_details', compact('user', 'ground_floor_list', 'first_floor_list', 'second_floor_list', 'ground_floor_img', 'first_floor_img', 'second_floor_img'));
    }

    public function EditHousesDetilasA(Request $request)
    {

        for ($i = 0; $i < count($request->input('title-g')); $i++) {

            $data = [];

            $data["type"] = "A";
            $data["section"] = "ground-floor";
            $data["title"] =  $request->input('title-g')[$i];

            $data["width"] =  $request->input('width-g')[$i];
            $data["length"] =  $request->input('length-g')[$i];

            if ($data["title"] == null) {
                break;
            } else {
                HouseDetails::create($data);
            }
        }

        for ($i = 0; $i < count($request->input('title-f')); $i++) {

            $data = [];

            $data["type"] = "A";
            $data["section"] = "first-floor";
            $data["title"] =  $request->input('title-f')[$i];

            $data["width"] =  $request->input('width-f')[$i];
            $data["length"] =  $request->input('length-f')[$i];

            if ($data["title"] == null) {
                break;
            } else {
                HouseDetails::create($data);
            }
        }

        for ($i = 0; $i < count($request->input('title-s')); $i++) {

            $data = [];

            $data["type"] = "A";

            $data["section"] = "second-floor";

            $data["title"] =  $request->input('title-s')[$i];

            $data["width"] =  $request->input('width-s')[$i];
            $data["length"] =  $request->input('length-s')[$i];


            if ($data["title"] == null) {
                break;
            } else {
                HouseDetails::create($data);
            }
        }



        if ($request->hasFile('ground_floor_img')) {

            $name = $request->file('ground_floor_img')->hashName();

            $path = $request->file('ground_floor_img')->storeAs('public/images_stduio/', $name);


            $ground_floor_img = HouseDetailsImages::where(['section' => "ground-floor", "type" => "A"]);

            $ground_floor_img->update(["path" => $name]);
        }


        if ($request->hasFile('first_floor_img')) {

            $name = $request->file('first_floor_img')->hashName();

            $path = $request->file('first_floor_img')->storeAs('public/images_stduio/', $name);


            $first_floor_img = HouseDetailsImages::where(['section' => "first-floor", "type" => "A"]);

            $first_floor_img->update(["path" => $name]);
        }


        if ($request->hasFile('second_floor_img')) {

            $name = $request->file('second_floor_img')->hashName();

            $path = $request->file('second_floor_img')->storeAs('public/images_stduio/', $name);


            $second_floor_img = HouseDetailsImages::where(['section' => "second-floor", "type" => "A"]);

            $second_floor_img->update(["path" => $name]);
        }

        return redirect('/houses-A-detilas')->with('success', 'تم تحديث الجداول بنجاح');
    }



    public function HousesDetilasB()
    {
        $user = auth()->user();

        $ground_floor_list = HouseDetails::where(['section' => "ground-floor", "type" => "B"])->get();

        $first_floor_list = HouseDetails::where(['section' => "first-floor", "type" => "B"])->get();

        $second_floor_list = HouseDetails::where(['section' => "second-floor", "type" => "B"])->get();


        $ground_floor_img = HouseDetailsImages::firstWhere(['section' => "ground-floor", "type" => "B"]);

        $first_floor_img = HouseDetailsImages::firstWhere(['section' => "first-floor", "type" => "B"]);

        $second_floor_img = HouseDetailsImages::firstWhere(['section' => "second-floor", "type" => "B"]);


        return view('admin-dashboard.houses_B_details', compact('user', 'ground_floor_list', 'first_floor_list', 'second_floor_list', 'ground_floor_img', 'first_floor_img', 'second_floor_img'));
    }

    public function EditHousesDetilasB(Request $request)
    {

        for ($i = 0; $i < count($request->input('title-g')); $i++) {

            $data = [];

            $data["type"] = "B";
            $data["section"] = "ground-floor";
            $data["title"] =  $request->input('title-g')[$i];

            $data["width"] =  $request->input('width-g')[$i];
            $data["length"] =  $request->input('length-g')[$i];

            if ($data["title"] == null) {
                break;
            } else {
                HouseDetails::create($data);
            }
        }

        for ($i = 0; $i < count($request->input('title-f')); $i++) {

            $data = [];

            $data["type"] = "B";
            $data["section"] = "first-floor";
            $data["title"] =  $request->input('title-f')[$i];

            $data["width"] =  $request->input('width-f')[$i];
            $data["length"] =  $request->input('length-f')[$i];

            if ($data["title"] == null) {
                break;
            } else {
                HouseDetails::create($data);
            }
        }

        for ($i = 0; $i < count($request->input('title-s')); $i++) {

            $data = [];

            $data["type"] = "B";

            $data["section"] = "second-floor";

            $data["title"] =  $request->input('title-s')[$i];

            $data["width"] =  $request->input('width-s')[$i];
            $data["length"] =  $request->input('length-s')[$i];


            if ($data["title"] == null) {
                break;
            } else {
                HouseDetails::create($data);
            }
        }


        if ($request->hasFile('ground_floor_img')) {

            $name = $request->file('ground_floor_img')->hashName();

            $path = $request->file('ground_floor_img')->storeAs('public/images_stduio/', $name);

            $ground_floor_img = HouseDetailsImages::where(['section' => "ground-floor", "type" => "B"]);

            $ground_floor_img->update(["path" => $name]);
        }


        if ($request->hasFile('first_floor_img')) {

            $name = $request->file('first_floor_img')->hashName();

            $path = $request->file('first_floor_img')->storeAs('public/images_stduio/', $name);


            $first_floor_img = HouseDetailsImages::where(['section' => "first-floor", "type" => "B"]);

            $first_floor_img->update(["path" => $name]);
        }


        if ($request->hasFile('second_floor_img')) {

            $name = $request->file('second_floor_img')->hashName();

            $path = $request->file('second_floor_img')->storeAs('public/images_stduio/', $name);


            $second_floor_img = HouseDetailsImages::where(['section' => "second-floor", "type" => "B"]);

            $second_floor_img->update(["path" => $name]);
        }

        return redirect('/houses-B-detilas')->with('success', 'تم تحديث الجداول بنجاح');
    }




    public function HousesDetilasC()
    {
        $user = auth()->user();

        $ground_floor_list = HouseDetails::where(['section' => "ground-floor", "type" => "C"])->get();

        $first_floor_list = HouseDetails::where(['section' => "first-floor", "type" => "C"])->get();

        $second_floor_list = HouseDetails::where(['section' => "second-floor", "type" => "C"])->get();

        $ground_floor_img = HouseDetailsImages::firstWhere(['section' => "ground-floor", "type" => "C"]);

        $first_floor_img = HouseDetailsImages::firstWhere(['section' => "first-floor", "type" => "C"]);

        $second_floor_img = HouseDetailsImages::firstWhere(['section' => "second-floor", "type" => "C"]);


        return view('admin-dashboard.houses_C_details', compact('user', 'ground_floor_list', 'first_floor_list', 'second_floor_list', 'ground_floor_img', 'first_floor_img', 'second_floor_img'));
    }


    public function EditHousesDetilasC(Request $request)
    {

        for ($i = 0; $i < count($request->input('title-g')); $i++) {

            $data = [];

            $data["type"] = "C";
            $data["section"] = "ground-floor";
            $data["title"] =  $request->input('title-g')[$i];

            $data["width"] =  $request->input('width-g')[$i];
            $data["length"] =  $request->input('length-g')[$i];

            if ($data["title"] == null) {
                break;
            } else {
                HouseDetails::create($data);
            }
        }

        for ($i = 0; $i < count($request->input('title-f')); $i++) {

            $data = [];

            $data["type"] = "C";
            $data["section"] = "first-floor";
            $data["title"] =  $request->input('title-f')[$i];

            $data["width"] =  $request->input('width-f')[$i];
            $data["length"] =  $request->input('length-f')[$i];

            if ($data["title"] == null) {
                break;
            } else {
                HouseDetails::create($data);
            }
        }

        for ($i = 0; $i < count($request->input('title-s')); $i++) {

            $data = [];

            $data["type"] = "C";

            $data["section"] = "second-floor";

            $data["title"] =  $request->input('title-s')[$i];

            $data["width"] =  $request->input('width-s')[$i];
            $data["length"] =  $request->input('length-s')[$i];


            if ($data["title"] == null) {
                break;
            } else {
                HouseDetails::create($data);
            }
        }

        if ($request->hasFile('ground_floor_img')) {

            $name = $request->file('ground_floor_img')->hashName();

            $path = $request->file('ground_floor_img')->storeAs('public/images_stduio/', $name);

            $ground_floor_img = HouseDetailsImages::where(['section' => "ground-floor", "type" => "C"]);

            $ground_floor_img->update(["path" => $name]);
        }


        if ($request->hasFile('first_floor_img')) {

            $name = $request->file('first_floor_img')->hashName();

            $path = $request->file('first_floor_img')->storeAs('public/images_stduio/', $name);


            $first_floor_img = HouseDetailsImages::where(['section' => "first-floor", "type" => "C"]);

            $first_floor_img->update(["path" => $name]);
        }


        if ($request->hasFile('second_floor_img')) {

            $name = $request->file('second_floor_img')->hashName();

            $path = $request->file('second_floor_img')->storeAs('public/images_stduio/', $name);


            $second_floor_img = HouseDetailsImages::where(['section' => "second-floor", "type" => "C"]);

            $second_floor_img->update(["path" => $name]);
        }


        return redirect('/houses-C-detilas')->with('success', 'تم تحديث الجداول بنجاح');
    }


    public function NavigateEditImageG()
    {
        $user = auth()->user();

        $all_images = HousesImageGallery::all();

        return view('admin-dashboard.settings.edit-image-gallery', compact('all_images', 'user'));
    }


    public function EditImageG(Request $request)
    {
    
        $data = [];
    
        if ($request->hasFile('house-img')) {
    
            $name = $request->file('house-img')->hashName();
    
            $path = $request->file('house-img')->storeAs('public/images_stduio/', $name);
    
            $data["path"] = "/storage/images_stduio/".$name;
        }
    
        HousesImageGallery::create($data);
    
        return back()->with('success', 'تم إضافة الصورة إلى معرض الصور');
    }


    public function DeleteImageG($id)
    {
    
        $detail_row = HousesImageGallery::find($id);

        $detail_row->delete();

        return back();
    
    }
    public function getEmbedUrl($url)
    {
        // function for generating an embed link
        $finalUrl = '';

        if (strpos($url, 'facebook.com/') !== false) {
            // Facebook Video
            $finalUrl .= 'https://www.facebook.com/plugins/video.php?href=' . rawurlencode($url) . '&show_text=1&width=200';
        } else if (strpos($url, 'vimeo.com/') !== false) {
            // Vimeo video
            $videoId = isset(explode("vimeo.com/", $url)[1]) ? explode("vimeo.com/", $url)[1] : null;
            if (strpos($videoId, '&') !== false) {
                $videoId = explode("&", $videoId)[0];
            }
            $finalUrl .= 'https://player.vimeo.com/video/' . $videoId;
        } else if (strpos($url, 'youtube.com/') !== false) {
            // Youtube video
            $videoId = isset(explode("v=", $url)[1]) ? explode("v=", $url)[1] : null;
            if (strpos($videoId, '&') !== false) {
                $videoId = explode("&", $videoId)[0];
            }
            $finalUrl .= 'https://www.youtube.com/embed/' . $videoId;
        } else if (strpos($url, 'youtu.be/') !== false) {
            // Youtube  video
            $videoId = isset(explode("youtu.be/", $url)[1]) ? explode("youtu.be/", $url)[1] : null;
            if (strpos($videoId, '&') !== false) {
                $videoId = explode("&", $videoId)[0];
            }
            $finalUrl .= 'https://www.youtube.com/embed/' . $videoId;
        } else if (strpos($url, 'dailymotion.com/') !== false) {
            // Dailymotion Video
            $videoId = isset(explode("dailymotion.com/", $url)[1]) ? explode("dailymotion.com/", $url)[1] : null;
            if (strpos($videoId, '&') !== false) {
                $videoId = explode("&", $videoId)[0];
            }
            $finalUrl .= 'https://www.dailymotion.com/embed/' . $videoId;
        } else {
            $finalUrl .= $url;
        }

        return $finalUrl;
    }
}
