<?php


  echo 'NARCISSISTIC NUMBER <br>';
  //NARCISSISTIC NUMBER

  narcissistic(136);

  function narcissistic($isi){
    $jumlah = 0;

  	$i = $isi;

  	$temp = $i;
  	$total = strlen($i);

  	while($i != 0) {
  		$r = $i%10;
  		$jumlah = $jumlah+pow($i, $total);
  		$i = floor($i/10);
  	}

  	if($jumlah == $temp) {
  		echo "$temp TRUE";
  	} else {
  		echo "$temp FALSE";
  	}
  }



//PARITY OUTLIER
echo '<br><br>PARITY OUTLIER <br>';


parity([160, 3, 1719, 19, 11, 13, -21] );

function parity($o){


    $my_array = $o;
    $odd = $even = 0;
    foreach ( $my_array as $number ) {
        $number % 2 == 0 ? $even++ : $odd++;


    }

    if ($odd==1){

      foreach ($my_array as $parity) {
        if($parity % 2 != 0){
              echo "result:".  $parity.'<br>';

          }

        }
      }else if ($even==1){
        foreach ($my_array as $parity) {
          if($parity % 2 == 0){
                echo "result:".  $parity.'<br>';

            }

          }
      }else{

        echo "false";
      }
}











 ?>
