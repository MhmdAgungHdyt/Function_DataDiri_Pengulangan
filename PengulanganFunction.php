<?php

function angkotCihuy($Angkot){
    for ($Angkot=1; $Angkot <= 20; $Angkot++){
        if($Angkot == 1 || $Angkot == 3 || $Angkot == 10 || $Angkot == 11 ){
          echo"Angkot no $Angkot tersedia <br/>";
        }else if($Angkot == 2 || $Angkot == 9 || $Angkot == 12 || $Angkot == 17){
          echo"Angkot no $Angkot sedang diperbaiki <br/>";
        }else{
          echo"Angkot no $Angkot tidak tersedia <br/>";
      }
      }
}
    echo"===Program Angkot Sederhana=== <br />";
    echo angkotCihuy(1);





?>