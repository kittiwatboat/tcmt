<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function cal_salary(Request $request){

        //เวลาทำงาน 8 hr/day
        $worktime = "8";
        //เวลา ot  1 hr/day
        $ot_time = "2";
        //เงินคูณ ot แต่ละช่วง
        $ot_type1 = "1.5";
        $ot_type2 = "2";
        //สมมติว่า ค่าจ้าง 1 hr = 100 bath
        $salary_normal=$worktime*100;
        $salary_ot1=(100*$ot_type1)*$ot_time;
        $salary_ot2=(100*$ot_type2)*0;
        $salary_ot = $salary_ot1+$salary_ot2;
        dd(
        'salary ='.$salary_normal,
        'ot 1='.$salary_ot1,
        'ot 2='.$salary_ot2,
        'ot all='.$salary_ot
        );
    }
    public function time_check(){
        $time1=["60554 2023-12-20 07:00:34","60554 2023-12-20 20:10:34","60555 2023-12-20 07:55:10","60555 2023-12-20 17:00:34"];
        // $time2="60554 2023-12-20 17:10:34";
        $checkmor="08:00:00";
        $checkeve="17:00:00";
        $employeeTimeMap = [];
        foreach ($time1 as $timeString) {
            $pieces = explode(" ", $timeString);
            $employeeCode = $pieces[0];
            $date = $pieces[1];
            $time = $pieces[2];

            // รวบรวมข้อมูลในแผนที่
            $employeeTimeMap[$employeeCode][$date][] = $time;
        }

        // ตรวจสอบและกำหนดเวลาขาเข้าและออก
        foreach ($employeeTimeMap as $employeeCode => $dates) {
            foreach ($dates as $date => $times) {
                // ตรวจสอบว่ามีมากกว่าหนึ่งเวลาในวันที่นี้หรือไม่
                if (count($times) > 1) {
                    // กำหนดเวลาขาเข้าและออกตามเงื่อนไข
                    $checkInTime = min($times);
                    $checkOutTime = max($times);
                    $checkInTimea=strtotime($date.' '.$checkmor);
                    $checkOutTimea=strtotime($date.' '.$checkOutTime);
                    $seconds = abs($checkInTimea - $checkOutTimea + 3600);
                    $h = round($seconds / 3600, 2);
                    $formatted_time = gmdate('H:i:s', $seconds);
                    if($checkOutTimea > $checkeve ){
                        $ot_cal=abs($checkOutTimea- strtotime($date." ".$checkeve));
                        $ot=gmdate('H:i:s',$ot_cal);
                    }
                    // แสดงผล
                    echo "รหัสพนักงาน: " . $employeeCode . "<br>";
                    echo "วันที่: " . $date . "<br>";
                    echo "เวลาขาเข้า: " . $checkInTime . "<br>";
                    echo "เวลาออก: " . $checkOutTime . "<br>";
                    echo "ทำงาน: " . $formatted_time . " น.<br>"; // แสดงเป็นทศนิยม 2 ตำแหน่ง
                    if(!empty($ot) and $ot >= "01:00:00"){
                    echo "ot: " . $ot . " ชั่วโมง<br><br>"; // แสดงเป็นทศนิยม 2 ตำแหน่ง
                    }

                }
            }
        }

        // if($time_1 > $checkmor){
        //     dd("เข้างานสาย");
        // }else{
        //     dd("เข้างานตรงเวลา");
        // }
        // dd($employeeCode,$datetime_1);

    }
}
