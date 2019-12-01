<?php
  $n=2.5;

  switch (gettype($n)) {
    case 'integer':
    case 'double':
      print('The value is a number');
      break;
      case 'boolean':

                echo "The data type is Boolean.";

                break;

        case 'string':

                echo "The data type is String.";

                break;

        case 'array':

                echo "The data type is Array.";

                break;

        default:

                echo "The data type unknown.";

                break;

}
?>
