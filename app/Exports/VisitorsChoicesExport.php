<?php

namespace App\Exports;

use App\Models\VisitorSelectHouse;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class VisitorsChoicesExport implements FromCollection,WithHeadings, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $visitors_choices_list = VisitorSelectHouse::all();



        foreach($visitors_choices_list as $vi)
        {

            $messages_arr[] = array(

            "الرقم التسلسلي" =>  $vi->id,
               "الاسم" =>  $vi->fullName,
               "الهاتف"  => $vi->phone,
               "النموذج المختار" =>  $vi->type,
               "تاريخ الحجز" => $vi->created_at,
            );

        }

        $reservations_obj = collect($messages_arr);
        


        return $reservations_obj ;

    }



    public function headings(): array
    {
        return [
            "الرقم التسلسلي",
               "الاسم" ,
               "الهاتف",
               "النموذج المختار",
               "تاريخ الحجز" ,
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
