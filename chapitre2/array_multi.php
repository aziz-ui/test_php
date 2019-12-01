<?php

 $heroInfo = [

      [
          'heroName' => 'Spiderman',

          'weapon' => 'Spider web'

      ],

      [

          'heroName' => 'Iron Man',

          'weapon' => 'Mark L'

     ],

     [

         'heroName' => 'Thor',

         'weapon' => 'Mjolnir'

     ],
   ];
     echo '<pre>';

     print_r($heroInfo);

     echo '<pre>';
     echo 'The weapon of choice for ' . $heroInfo[1]['heroName'] . ' is ' . $heroInfo[1]['weapon'];

     echo '<br>';

     echo $heroInfo[2]['heroName'] . ' wields ' . $heroInfo[2]['weapon'];
?>
