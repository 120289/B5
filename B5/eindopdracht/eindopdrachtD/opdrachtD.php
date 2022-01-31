<?php
$xml=simplexml_load_file("personen.xml") or die("Error: Cannot create object");
header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='UTF-8'?>";
echo "<people>";
foreach($xml->children() as $person)
{
    echo "<person>
   $person->name . ",";
   $person->gender . ",";
   $person->hair . ",";
   $person->eye . ",";
   $person->skin . ",";
   $person->height . ",";
         </person>";
}
 echo "</people>";
?>
