<?php

  
  $text = "This is My Text";
  $array = array(1,2,3,4,5,6,7,8,9,10);
  

  class main {

    public function __construct() {

      echo 'Hello I am a Contructor </br>';
    }
      
      
      public function __destruct() {

      echo '</br> I am a Destructor';

    }

      public function chunkarray() { 
              echo '<h1>Array Chunk Demo</h1> </br>';
     $input_array = array('mon', 'tue', 'wed', 'thurs', 'fri');
     print_r(array_chunk($input_array, 2)); 
              echo '</br>';         
     print_r(array_chunk($input_array, 2, true));
      echo '<hr>';
    }

    
      public function printArray($array) {                 
      echo '<h1>Array Print Function</h1>';
      print_r($array);
      echo '<hr>';
    }
    
  
      
      public function columnarray(){                              
        echo '<h1>This is Array Column Function Demo</h1>';
    $records = array(
    array(
        'id' => 2135,
        'f_name' => 'Cristiano',
        'l_name' => 'Ronaldo',
    ),
    array(
        'id' => 3245,
        'f_name' => 'Lionel',
        'l_name' => 'Messi',
    ),
    array(
        'id' => 5342,
        'f_name' => 'Wayne',
        'l_name' => 'Rooney',
    ),
    array(
        'id' => 5623,
        'f_name' => 'David',
        'l_name' => 'Beckham',
    )
);
   $first_names = array_column($records, 'f_name');
print_r($first_names);           
        echo '<hr>';
    }
      
      public function combinearray(){                            
         echo '<h1>This is Combine Array function demo</h1>';
    $a = array('1', '2', '3');
    $b = array('Mathematics', 'Science', 'English');
    $c = array_combine($a, $b);

print_r($c);       
        echo '<hr>';       
    }
      
      
      public function fillarray(){                         
   echo '<h1> Fill Array function demo</h1>';
   $m = array_fill(9, 3, 'Red');
   $n = array_fill(8, 6, 'Blue');
   print_r($m);
   print_r($n);
   echo '<hr>';
     }
      
      public function fliparray(){   
   echo '<h1>Flip Array function Demo</h1>';   
   $a = array("Bus", "Car", "Train");
   $flip = array_flip($a);
   print_r($flip); 
   echo '<hr>'; 
     }         
      
      
      public function keyarray(){
    echo '<h1>Array Key Function Demo</h1>';
    $array = array(0 => 100, "color" => "yellow");
    print_r(array_keys($array));
    $array = array("brown", "yellow", "aqua", "brown", "brown");
    print_r(array_keys($array, "brown"));
    $array = array("color" => array("brown", "yellow", "aqua"),
               "size"  => array("small", "medium", "large"));
    print_r(array_keys($array));
    echo '<hr>';           
     }
      
      
      public function mergearray(){
    echo '<h1>Array Merge Function Demo</h1>';
   $a1 = array("month" => "jan", 2, 4);
   $a2 = array("a", "b", "month" => "feb", "season" => "winter", 4);
   $rslt = array_merge($a1, $a2);
   print_r($rslt);
    echo '<hr>';           
     }  
      
      
      public function pusharray(){
    echo '<h1> Array Push Function Demo</h1>';
    $s = array("Lion", "Tiger");
    array_push($s, "Elephant", "Deer");
    print_r($s);
    echo '<hr>';
     }
      
      
     public function sortarray(){
   echo '<h1> Sort Array Function Demo</h1>';
   $flowers = array("Rose", "Sunflower", "Hibiscus", "Lotus");
sort($flowers);
foreach ($flowers as $key => $val) {
    echo "flowers[" . $key . "] = " . $val . "n";
}
 
   echo '<hr>';
     }         
      
      
      

  }

$obj = new main();
$obj->chunkarray();
$obj->printArray($array);
$obj->columnarray();
$obj->combinearray();
$obj->fillarray();
$obj->fliparray(); 
$obj->keyarray();
$obj->mergearray();
$obj->pusharray();
$obj->sortarray();
?>
