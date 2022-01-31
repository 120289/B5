</body>
</html>
<?php
$xml=simplexml_load_file("gastenboek.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) {
  echo $books->to . ", <br>";
  echo $books->from . ", <br>";
  echo $books->text . "<br>";
}
?>
</body>
</html>
