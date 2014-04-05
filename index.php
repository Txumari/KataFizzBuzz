<?php

require 'katayunoMadrid/FizzBuzz.php';



// $xml = simplexml_load_string('<types>
//     <xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema"
//       targetNamespace="http://ConvertedStockQuote">
//       <xs:element name="getQuote">
//         <xs:complexType>
//           <xs:sequence>
//             <xs:element name="ticker" type="xs:string"/>
//             <xs:element name="currency" type="xs:string"/>
//           </xs:sequence>
//         </xs:complexType>
//       </xs:element>
//       <xs:element name="getQuoteResponse">
//         <xs:complexType>
//           <xs:sequence>
//             <xs:element name="getQuoteReturn" type="xs:float"/>
//           </xs:sequence>
//         </xs:complexType>
//       </xs:element>
//     </xs:schema>
//   </types>');

// $actores = array("Buenafuente","Berto","Youtuber",$xml->__toString());
// ladybug_set_theme("classic");
// ladybug_set_format("html");
// ladybug_dump($actores);

echo " Katayuno madrid";
echo "<br>";

$fizzBuzz = new katayunoMadrid\FizzBuzz();

echo $fizzBuzz->haveNumber("23","3");

// for($i = 1;$i<=100;$i++){
//   echo $fizzBuzz->kataFizzBuzz($i);
//   echo "<br>";  
// }


?>