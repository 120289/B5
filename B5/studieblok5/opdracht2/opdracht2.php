</body>
</html>
<?php
$xml=simplexml_load_file("plant_catalog.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) {
  echo $books->COMMON . ", ";
  echo $books->BOTANICAL . ", ";
  echo $books->ZONE . ", ";
  echo $books->LIGHT . ", ";
  echo $books->PRICE . ", ";
  echo $books->AVAILABILITY . "<br>";
}
?>
</body>
</html>
