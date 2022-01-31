</body>
</html>
<?php
$xml=simplexml_load_file("cd_catalog.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) {
  echo $books->TITLE . ", ";
  echo $books->ARTIST . ", ";
  echo $books->COUNTRY . ", ";
  echo $books->COMPANY . ", ";
  echo $books->PRICE . ", ";
  echo $books->YEAR . "<br>";
}
?>
</body>
</html>
