<?php

namespace App\Exports;

use App\Models\ContactUs;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class ContactUsExport implements FromCollection,WithHeadings, WithEvents
{
    public function collection()
    {

        $user = auth()->user();


        $contact_list = ContactUs::all();
                
        foreach($contact_list as $cu)
        {

            $messages_arr[] = array(

            "الرقم التسلسلي" =>  $cu->id,
               "الاسم" =>  $cu->name,
               "البريد الإلكتروني"  => $cu->email,
               "العنوان" =>  $cu->subject,
               "تاريخ الإنشاء" => $cu->created_at,
               "الرسالة" => $cu->message,
            );

        }

        $reservations_obj = collect($messages_arr);
        


        return $reservations_obj ;



    }

    public function headings(): array
    {
        return [
            "الرقم التسلسلي",
            "الاسم",
            "البريد الإلكتروني" ,
            "العنوان",
            "تاريخ الإنشاء",
            "الرسالة",

        ];
    }


    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
   
                $event->sheet->getDelegate()->getColumnDimension('A')->setWidth(12);
                $event->sheet->getDelegate()->getColumnDimension('B')->setWidth(15);
                $event->sheet->getDelegate()->getColumnDimension('C')->setWidth(20);
                $event->sheet->getDelegate()->getColumnDimension('D')->setWidth(20);
                $event->sheet->getDelegate()->getColumnDimension('E')->setWidth(18);
                $event->sheet->getDelegate()->getColumnDimension('F')->setWidth(60);
     
            },
        ];
    }


}
