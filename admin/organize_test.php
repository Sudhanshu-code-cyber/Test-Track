<?php
include_once "../config/connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body>
    <?php include_once "includes/admin_header.php"; ?>
    <div class="flex">
        <div class="w-2/12 h-[88vh] flex flex-col gap-3 fixed top-15 text-xl font-semibold text-gray-700 bg-[#FFE6E6]">
            <?php include_once "includes/sidebar.php"; ?>
        </div>
        <div class="w-10/12 flex flex-col justify-center fixed top-15 right-1  p-5">
            <h1 class="text-2xl mb-2 font-semibold">Organize Test</h1>
            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6 border border-gray-200 overflow-y-scroll h-[88vh] rounded p-5">
                <!-- Exam Title -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label for="" class="block text-sm font-medium text-gray-700">Exam Title</label>
                        <input
                            type="text"
                            name="test_title"
                            placeholder="Enter exam title"
                            class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>

                    <!-- Subject -->
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                        <select
                            id="subject"
                            name="subject"
                            class="mt-2 w-full px-4 py-2 border border-gray-300 bg-white rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            required>
                            <option value="" disabled selected>Select a subject</option>
                            <?php
                            $callingSub = $connect->query("select * from subject");
                            while ($sub = mysqli_fetch_array($callingSub)) {
                                echo "<option value='" . $sub['subject_name'] . "'>" . $sub['subject_name'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Date and Time -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label for="date" class="block text-sm font-medium text-gray-700">Exam Date</label>
                        <input
                            type="date"
                            id="date"
                            name="date"
                            class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>
                    <div>
                        <label for="time" class="block text-sm font-medium text-gray-700">Start Time</label>
                        <input
                            type="time"
                            id="time"
                            name="time"
                            class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>
                </div>

                <!-- Duration and Total Marks -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label for="duration" class="block text-sm font-medium text-gray-700">Duration (in minutes)</label>
                        <input
                            type="number"
                            id="duration"
                            name="duration"
                            placeholder="Enter duration (e.g., 90)"
                            class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>
                    <div>
                        <label for="" class="block text-sm font-medium text-gray-700">Total Marks</label>
                        <input
                            type="number"
                            name="total_marks"
                            placeholder="Enter total marks"
                            class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>
                </div>

                <!-- Passing Marks and Negative Marking -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label for="" class="block text-sm font-medium text-gray-700">Passing Marks</label>
                        <input
                            type="number"
                            name="passing_marks"
                            placeholder="Enter passing marks"
                            class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>
                    <div>
                        <label for="" class="block text-sm font-medium text-gray-700">Upload Template</label>
                        <input 
                            type="file" 
                            name="template" 
                            class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                            required>
                    </div>

                </div>

                <!-- Randomize Questions -->
                <div class="flex items-center gap-[35%] ">
                    <div class="flex items-center gap-2">
                        <input
                            type="checkbox"
                            id="randomizeQuestions"
                            name="randomizeQuestions"
                            class="h-5 w-5 text-blue-600 rounded">
                        <label for="randomizeQuestions" class="text-sm font-medium text-gray-700">Randomize Questions</label>
                    </div>
                    <div class="flex items-center  gap-2">
                        <input
                            type="checkbox"
                            name="negativeMarking"
                            class="h-5 w-5 text-blue-600 rounded">
                        <label for="" class="text-sm font-medium text-gray-700">Enable Negative Marking</label>
                    </div>
                </div>

                <!-- Instructions -->
                <div>
                    <label for="instructions" class="block text-sm font-medium text-gray-700">Special Instructions</label>
                    <textarea
                        id="instructions"
                        name="instructions"
                        rows="3"
                        placeholder="Provide any special instructions for the exam"
                        class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="mb-15">
                    <button
                        type="submit"
                        name="save_exam"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Save Exam
                    </button>
                </div>
            </form>
        </div>
</body>

</html>
<?php
if(isset($_POST['save_exam'])){
    $test_title = $_POST['test_title'];
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $time =  $_POST['time'];
    $duration = $_POST['duration'];
    $total_marks  = $_POST['total_marks'];
    $passing_marks = $_POST['passing_marks'];
    $randomizeQuestions = $_POST['randomizeQuestions'];
    $negativeMarking = $_POST['negativeMarking'];
    $instructions = $_POST['instructions'];

     // image work
     $template = $_FILES['template']['name'];
     $tmp_image = $_FILES['template']['tmp_name'];
 
     move_uploaded_file($tmp_image,"../image/template/$template");

     $query = $connect->query("insert into tests (test_title, subject, date, time, duration, total_marks, passing_marks, template, negativeMarking, randomizeQuestions, instructions)
     values('$test_title','$subject','$date','$time','$duration','$total_marks','$passing_marks','$template','$negativeMarking','$randomizeQuestions','$instructions')");

     if($query){
        msg("Exam Added Successfully");
     }
     else{
        msg("Something Went Wrong");
     }
}
