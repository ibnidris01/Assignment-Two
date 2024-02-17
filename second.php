<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       

       function isValidDate($year, $month, $day) {
           return checkdate($month, $day, $year);
       }
       
       function getDayOfWeek($year, $month, $day) {
           $timestamp = mktime(0, 0, 0, $month, $day, $year);
           $dayOfWeek = date('N', $timestamp);
       
           return $dayOfWeek;
       }
       
       function displayDayOfWeek($dayOfWeek) {
           switch ($dayOfWeek) {
               case 1:
                   return "Monday";
               case 2:
                   return "Tuesday";
               case 3:
                   return "Wednesday";
               case 4:
                   return "Thursday";
               case 5:
                   return "Friday";
               case 6:
                   return "Saturday";
               case 7:
                   return "Sunday";
               default:
                   return "Invalid day of the week";
           }
       }
       
       // Get input from the user
       $year = (int) readline("Enter the year: ");
       $month = (int) readline("Enter the month (1-12): ");
       $day = (int) readline("Enter the day: ");
       
       // Validate the date
       if (isValidDate($year, $month, $day)) {
           // Handle leap years
           if ($month == 2 && $day == 29 && !date('L', mktime(0, 0, 0, 1, 1, $year))) {
               echo "Error: $year is not a leap year. February can't have 29 days.\n";
           } else {
               // Get the day of the week
               $dayOfWeek = getDayOfWeek($year, $month, $day);
       
               // Display the result
               $dayName = displayDayOfWeek($dayOfWeek);
               echo "The day of the week for $year-$month-$day is $dayName.\n";
           }
       } else {
           echo "Error: Invalid data";
       }
       
    ?>
</body>
</html>