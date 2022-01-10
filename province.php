<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  echo "<body bgcolor ='FFFF99'>";
  echo "<h1 align = 'center'>รายงานสถานการโควิด-19 แยกจังหวัด</h1>";
  echo "<table border='1' align = 'center' bgcolor ='FFCCFF'>";
  echo "<tr align = 'center' bgcolor ='CCFFFF'><td><b>ลำดับ</b></td><td><b>จังหวัด</b></td><td><b>ผู้ป่วยใหม่</b></td><td><b>ผู้ป่วยรวม</b></td><td><b>ผู้ป่วยใหม่ในประเทศ</b></td><td><b>ผู้ป่วยรวมในประเทศ</b></td><td><b>ผู้เสียชีวิตใหม่</b></td><td><b>ผู้เสียชีวิตรวม</b></td><td><b>วันที่อัพเดท</b></td></tr>";
  foreach($data as $key=>$val){
    echo "<tr>";
    echo "<td>";
    echo $key +1;
    echo "</td>";
    echo "<td>";
    echo $val->province;
    echo "</td>";
    echo "<td>";
    echo $val->new_case;
    echo "</td>";
    echo "<td>";
    echo $val->total_case;
    echo "</td>";
    echo "<td>";
    echo $val->new_case_excludeabroad;
    echo "</td>";
    echo "<td>";
    echo $val->total_case_excludeabroad;
    echo "</td>";
    echo "<td>";
    echo $val->new_death;
    echo "</td>";
    echo "<td>";
    echo $val->total_death;
    echo "</td>";
    echo "<td>";
    echo $val->txn_date;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table>";
  echo "</body>";
?>
covid19.ddc.moph.go.th
covid19.ddc.moph.go.th
