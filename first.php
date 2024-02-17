<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  

     function calculateGrade($cgpa) {
         // Check if CGPA is within valid range
         if ($cgpa >= 0 && $cgpa <= 4.0) {
             // Determine the letter grade based on the provided criteria
             if ($cgpa >= 4.0) {
                 $letterGrade = 'Excellent (A)';
             } elseif ($cgpa >= 3.5) {
                 $letterGrade = 'Very Good (B+)';
             } elseif ($cgpa >= 3.0) {
                 $letterGrade = 'Good (B)';
             } elseif ($cgpa >= 2.5) {
                 $letterGrade = 'Fair (C+)';
             } elseif ($cgpa >= 2.0) {
                 $letterGrade = 'Pass (C)';
             } else {
                 $letterGrade = 'Fail';
             }
     
             // Return the result as a string
             return "CGPA: $cgpa, Grade: $letterGrade";
         } else {
             return "Invalid CGPA. Please enter a CGPA between 0 and 4.0.";
         }
     }
     
     // Example usage
     $studentCGPA = 3.2;
     $result = calculateGrade($studentCGPA);
     echo $result;
     
     
     
       
    
    ?>
</body>
</html>