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
     echo 'The weapon of choice for ' . $heroInfo[3]['heroName'] . ' is ' . $heroInfo[3]['weapon'];

     echo '<br>';

     echo $heroInfo[2]['heroName'] . ' wields ' . $heroInfo[2]['weapon'];
?>
