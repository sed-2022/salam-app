<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "sabyagarden@gmail.com",
            'password' => bcrypt("sabya@2022"),
        ]);



        DB::table('home_page_settings')->insert([
            'pdf_file' => "apple-touch-plant-fill.png",
            'first_slider_photo' => "main-header.jpg",
            'second_slider_photo' => "main-header.jpg",
            'third_slider_photo' => "main-header.jpg",
            'about_sabya' => "السلام هيلز هو عنوانك الجديد لوحدات وشقق سكنية تم تصميمها وانشائها خصيصا للباحثين عن الحداثة والتميز في مدينة المبرز بمحافظة األحساء حيث تتميز الشقق السكنية بعمائر السلام هيلز بموقعها الاستراتيجي المميز واطالالتها الرائعة وبنية تحتية متكاملة ، كما تمنح السلام هيلز لساكنيها مجتمع مفعم بالحياة يحتوي على حدائق ومساجد ومراكز تسوق وترفيه ومدارس ومرافق اخرى يمكنك اكتشافها بنفسك.",
            'about_sabya_photo' => "about-sabya.jpg",
            'area_number' => "13000",
            'units_number' => "70",
            'facilites_number' => "9",
            'about_developer_title' => "شركة عمر الزرعة وشركاؤه للتطوير العقاري",
            'about_developer_content' => "عندمــا بدأنــا منذ عام 2003 وبناء على دراسة جادة للسوق العقاري للمملكة وما يشهده من نهضة عقارية قررنا المشاركة في هذا النهوض وحرصنا علــى المســاهمة فــي تطويــر الســوق العقــاري برفــع وضمان جــودة ومســتوى الخدمــات التي نقدمها ، وعملنا علــى توحيد الرؤى وتوســيع نطاق الأهداف لتكــون مرنــة وقــادرة علــى مواكبة التغيــرات النوعيّـة فــي جــودة البنــاء ومواجهــة متغيرات وتحديـات سـوق العقـار ولقد تخصصت شركتنا في تطوير الأراضي الخام بنوعين من التطوير وهما :",
            'about_developer_more' => "النوع الأول : وهو تطوير البنية التحتية للأراضي الخام وذلك بتصميم وتنفيذ الخدمات الأساسية اللازمة لتجزئة الأرض الخام وفرزها وبيعها كقطع تجارية وسكنية.",
            'another_about_developer_more' => "النوع الثاني :هو التطوير الشامل للأراضي الخام وذلك بتصميم وتنفيذ البنية التحتية وكذلك تصميم وتنفيذ المباني التجارية والسكنية وذلك وفق أحدث المعايير وطبقاً للأنظمة والاشتراطات.",
            'about_developer_photo' => "about-developer.jpg",
            'protoype_A_title' => "شقق نموذج A",
            'protoype_A_photo' => "inner_projects_01.jpg",
            'A_rooms' => "4",
            'protoype_A_bulding_area' => "160",
            'protoype_A_price' => "950000",
            'protoype_A_pdf' => "apple-touch-plant-fill.png",
            'protoype_B_title' => "شقق نموذج B",
            'protoype_B_photo' => "inner_projects_02.jpg",
            'B_rooms' => "3",
            'protoype_B_bulding_area' => "140",
            'protoype_B_price' => "850000",
            'protoype_B_pdf' => "apple-touch-plant-fill.png",
            'protoype_C_title' => "شقق نموذج C",
            'protoype_C_photo' => "inner_projects_03.jpg",
            'C_rooms' => "2",
            'protoype_C_bulding_area' => "120",
            'protoype_C_price' => "800000",
            'protoype_C_pdf' => "apple-touch-plant-fill.png",

            'promotional_section' => "promotion.jpg",

            
        ]);


        DB::table('project_page_settings')->insert([
            'pdf_file' => "apple-touch-plant-fill.png",
            'scheme_img' => "schem-map.jpg",
        ]);


        foreach (range(1, 6) as $index) {

            DB::table('funding_page_settings')->insert([
                'logo' => 'client-1.png',
            ]);
        }


        foreach (range(1, 3) as $index) {

            DB::table('involved_companies')->insert([
                'logo' => 'client2-1.png',
            ]);
        }
        
        
        foreach (range(1, 3) as $index) {

            DB::table('involved_companies')->insert([
                'logo' => 'client2-4.png',
            ]);
        }

     

        DB::table('sucess_partners')->insert([
            'logo' => 'client-1.png',
        ]);
        
        DB::table('sucess_partners')->insert([
            'logo' => 'client-3.png',
        ]);
        DB::table('sucess_partners')->insert([
            'logo' => 'client-4.png',
        ]);
        DB::table('sucess_partners')->insert([
            'logo' => 'client5.png',
        ]);

        DB::table('sucess_partners')->insert([
            'logo' => 'client-8.png',
        ]);
        DB::table('sucess_partners')->insert([
            'logo' => 'client-9.png',
        ]);
        DB::table('sucess_partners')->insert([
            'logo' => 'client-10.png',
        ]);
        DB::table('sucess_partners')->insert([
            'logo' => 'client-11.png',
        ]);


        DB::table('house_details_images')->insert([
            'type' => 'A',
            'section' => 'ground-floor',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('house_details_images')->insert([
            'type' => 'A',
            'section' => 'first-floor',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('house_details_images')->insert([
            'type' => 'A',
            'section' => 'second-floor',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);



        

        DB::table('house_details_images')->insert([
            'type' => 'B',
            'section' => 'ground-floor',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('house_details_images')->insert([
            'type' => 'B',
            'section' => 'first-floor',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('house_details_images')->insert([
            'type' => 'B',
            'section' => 'second-floor',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        

        DB::table('house_details_images')->insert([
            'type' => 'C',
            'section' => 'ground-floor',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('house_details_images')->insert([
            'type' => 'C',
            'section' => 'first-floor',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('house_details_images')->insert([
            'type' => 'C',
            'section' => 'second-floor',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Seeding houses A
        /*foreach (range(1, 1000) as $index) {

            DB::table('house_reservations')->insert([
                'type' => 'A',
                'subtype' => 'A' . $index,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }

        //Seeding houses B
        foreach (range(1, 1000) as $index) {

            DB::table('house_reservations')->insert([
                'type' => 'B',
                'subtype' => 'B' . $index,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
        //Seeding houses C
        foreach (range(1, 1000) as $index) {

            DB::table('house_reservations')->insert([
                'type' => 'C',
                'subtype' => 'C' . $index,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }*/
    }
}
