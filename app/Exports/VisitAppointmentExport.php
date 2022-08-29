<?php

namespace App\Exports;

use App\Models\VisitAppointment;
use Maatwebsite\Excel\Concerns\FromCollection;


use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class VisitAppointmentExport implements FromCollection,WithHeadings, WithEvents
{
    
    public function collection()
    {

        $user = auth()->user();


        $visits_list = VisitAppointment::all();
                
        foreach($visits_list as $vi)
        {

            $houses_r_arr[] = array(

                "الرقم التسلسلي" =>  $vi->id,
               "الاسم" =>  $vi->fullName,
               "رقم الجوال"  => $vi->phone,
               "عدد الزوار"  => $vi->team_no,
               "تاريخ الإصدار" => $vi->created_at,
            );

        }

        $reservations_obj = collect($houses_r_arr);
        


        return $reservations_obj ;



    }

    public function headings(): array
    {
        return [
            "الرقم التسلسلي",
            "الاسم",
            "رقم الجوال" ,
            "عدد الزوار",
            "تاريخ الإصدار",
        ];
    }


    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
   
                $event->sheet->getDelegate()->getColumnDimension('A')->setWidth(15);
                $event->sheet->getDelegate()->getColumnDimension('B')->setWidth(15);
                $event->sheet->getDelegate()->getColumnDimension('C')->setWidth(18);
                $event->sheet->getDelegate()->getColumnDimension('D')->setWidth(10);
                $event->sheet->getDelegate()->getColumnDimension('E')->setWidth(20);
     
            },
        ];
    }


}
