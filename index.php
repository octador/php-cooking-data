<?php
// $string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
// $dico = explode("\r\n", $string);

// $result = count($dico);
// echo "le dicotionnaire fait ".$result;
// ------------------------------------------------------------------------------
// $mot15Lettre = [];
// foreach ($dico as $ligne) {

//     if (strlen($ligne) === 16 ) {
//        $mot15Lettre[] = $ligne;
//     }
// }
// // print_r(count($mot15Lettre));

// echo "il y a ".count($mot15Lettre)." mots de 15 lettres dans ce dico";
// ----------------------------------------------------------------------------------
// $motsAvecW = [];
// foreach ($dico as $mot) {
//     if (stripos($mot, 'w') !== false) {
//         $motsAvecW[] = $mot; 
//     }
// };
// print_r("le nombre de mot conteant w est ".count($motsAvecW));

// foreach ($motsAvecW as $motAvecW) {
//     echo $motAvecW . "<br>";
// }
// ------------------------------------------------------------

// $arrayEnd = [];

// foreach($dico as $word) {

// $lastQ = substr($word, -1);
// // $lastQ = $word[strlen($word)-1];
// // var_dump($lastQ) ;

//   if ($lastQ === 'q') {
    
//     $arrayEnd[] = $word;
//   }
// } 
// print_r(count($arrayEnd));
// --------------------------------------------------------------------

?>