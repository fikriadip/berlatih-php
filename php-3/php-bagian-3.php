<?php

if (!function_exists('number_to_str')) {
    function  tukar_besar_kecil($string){
        $convertion = ['A'=>'a','a'=>'A','B' =>'b','b' =>'B', 'C'=>'c', 'c'=>'C', 'D'=>'d','d'=>'D', 'E'=>'e','e'=>'E', 'F'=>'f','f'=>'F', 'G'=>'g','g'=>'G', 'H'=>'h','h'=>'H', 'I'=>'i','i'=>'I', 'J'=>'j', 'j'=>'J', 'K'=>'k', 'k'=>'K', 'L'=>'l','l'=>'L', 'M'=>'m','m'=>'M', 'N'=>'n','n'=>'N', 'O'=>'o','o'=>'O', 'P'=>'p','p'=>'P', 'Q'=>'q','q'=>'Q', 'R'=>'r','r'=>'R', 'S'=>'s','s'=>'S', 'T'=>'t','t'=>'T', 'U'=>'u','u'=>'U', 'V'=>'v','v'=>'V', 'W'=>'w','w'=>'W', 'X'=>'x','x'=>'X', 'Y'=>'y','y'=>'Y', 'Z'=>'z', 'z'=>'Z'];
        $array_data = str_split($string);
        $data_baru   = "";

        foreach ($array_data as  $value) {
            $data_baru .= $convertion["$value"]."";
        }
        return $data_baru;

    }
}

echo tukar_besar_kecil('Hello World') . "<br>"; // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY') . "<br>"; // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!') . "<br>"; // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me') . "<br>"; // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW') . "<br>"; // "001-a-3-5tRDyw"


?>