<?php

namespace App\Exports;

use App\Models\HouseReservation;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class HousesReservationsExport implements FromCollection,WithHeadings, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $user = auth()->user();


        $h_reservations = HouseReservation::all();
                
        foreach($h_reservations as $hr)
        {

            $houses_r_arr[] = array(

                "الرقم التسلسلي" =>  $hr->id,
               "النوع" =>  $hr->type,
               "النوع الفرعي"  => $hr->subtype,
               "متاح" =>  $hr->isAvailable ==1 ? "نعم" : "محجوز",
               "تاريخ آخر تحديث" => $hr->updated_at==null? $hr->created_at: $hr->updated_at,
            );

        }

        $reservations_obj = collect($houses_r_arr);
        


        return $reservations_obj ;



    }

    public function headings(): array
    {
        return [
            "الرقم التسلسلي",
            "النوع",
            "النوع الفرعي" ,
            "متاح",
            "تاريخ آخر تحديث",
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
                $event->sheet->getDelegate()->getColumnDimension('E')->setWidth(18);
                $event->sheet->getDelegate()->getColumnDimension('F')->setWidth(15);
                $event->sheet->getDelegate()->getColumnDimension('G')->setWidth(15);
     
            },
        ];
    }


}
