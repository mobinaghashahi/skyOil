<?php

namespace App\Exports;

use App\Models\Customer;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;


class UsersExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{

    public function headings(): array
    {
        return [
            "نام", "نام خانوادگی", "کد ملی", "پلاک ماشین", "شماره کیلومتر فعلی", "شماره کیلومتر قبلی", "کارکرد پیشنهادی", "شماره همراه"
            , "نوع ماشین", "تاریخ تعویش روغن", "مدت زمان منقضی شدن روغن"
        ];
    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {

        return Customer::all()->makeHidden(['created_at', 'updated_at', 'id']);;
    }

    public function registerEvents(): array

    {

        return [

            AfterSheet::class => function (AfterSheet $event) {


                $event->sheet->getDelegate()->getStyle('A1:K1')->getFont()
                    ->getColor()
                    ->setARGB('FFFFFF');
                
                $event->sheet->getDelegate()->getStyle('A1:K1')->getFont()
                    ->setBold(true);

                $event->sheet->getDelegate()->getStyle('A1:K1')->getFill()
                    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setARGB('808080');

            },

        ];

    }

}
