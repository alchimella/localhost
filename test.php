<?php
function tableCreator($cols, $ar) {
$rows = ceil(count($ar)/$cols);
echo '<table border="1">';

for ($i=0;$i<$rows;$i++){
  echo '<tr>';
  for ($j=0;$j<$cols;$j++){
    echo "<td>".$ar[$j*$rows+$i]."</td>";
  }
  echo '</tr>';
};

echo '</table>';
};

$ar = array('Title1', 'Title2', 'Title3', 'Title4', 'Title5', 'Ending', 'OneMoreEl');  
tableCreator(3,$ar);
?>