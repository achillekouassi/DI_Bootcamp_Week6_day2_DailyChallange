<html>
<head>
<meta charset="utf-8">
<title>Dame</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php

echo "<table>";
for ($i=0; $i<8; $i++) {
  echo "<tr>";
  for ($j=0; $j<8; $j++) {
    if (($i+$j) % 2 == 0) {
      echo "<td class='black'></td>";
    } else {
      echo "<td class='white'></td>";
    }
  }
  echo "</tr>";
}
echo "</table>";
?>

</body>
</html>