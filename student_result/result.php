<?php
// Function to calculate the result
function calculateResult($sub1, $sub2, $sub3, $sub4, $sub5) {

   // Check if marks are within valid range
    if (($sub1 < 0 || $sub1 > 100) || ($sub2 < 0 || $sub2 > 100) || 
        ($sub3 < 0 || $sub3 > 100) || ($sub4 < 0 || $sub4 > 100) || 
        ($sub5 < 0 || $sub5 > 100)) {
        echo "Marks should be between 0 to 100.";
        return;
    }
    
    // Check for failure condition
    if ($sub1 < 33 || $sub2 < 33 || $sub3 < 33 || $sub4 < 33 || $sub5 < 33) {
        echo "The student has failed.";
        return;
    }
    
    // Calculate total marks and average
    $totalMarks = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    $averageMarks = $totalMarks / 5;
    
    // Determine the grade using switch-case
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = "D";
            break;
        default:
            $grade = "F";
    }
    
    // Output the results
    echo "Total Marks: " . $totalMarks . "\n";
    echo "Average Marks: " . $averageMarks . "\n";
    echo "Grade: " . $grade;
}


$subject1 = 95;
$subject2 = 67;
$subject3 = 95;
$subject4 = 80;
$subject5 = 50; 

calculateResult($subject1, $subject2, $subject3, $subject4, $subject5);
