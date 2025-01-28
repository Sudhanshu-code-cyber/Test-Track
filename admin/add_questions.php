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
            <h1 class="text-2xl mb-2 font-semibold">Adding Questions</h1>
            <form action="" method="POST" class="space-y-6 border border-gray-200 overflow-y-scroll h-[88vh] p-5 rounded shadow-md">
                <!-- Select Exam -->
                <div>
                    <label for="" class="block text-sm font-medium text-gray-700">Select Exam</label>
                    <select
                        id=""
                        name="exam_name"
                        class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        required>
                        <option value="" disabled selected>Select an exam</option>
                        <?php
                            $callingExam = $connect->query("select * from tests");
                            while ($exam = mysqli_fetch_array($callingExam)) {
                                echo "<option value='" . $exam['test_title'] . "'>" . $exam['test_title'] . "</option>";
                            }
                            ?>
                    </select>
                </div>

                <!-- Question Text -->
                <div>
                    <label for="" class="block text-sm font-medium text-gray-700">Question</label>
                    <textarea
                        id=""
                        name="question"
                        rows="3"
                        placeholder="Enter the question"
                        class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        required></textarea>
                </div>

                <!-- Options -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label for="" class="block text-sm font-medium text-gray-700">Option A</label>
                        <input
                            type="text"
                            id=""
                            name="opt1"
                            placeholder="Enter option A"
                            class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>
                    <div>
                        <label for="" class="block text-sm font-medium text-gray-700">Option B</label>
                        <input
                            type="text"
                            id=""
                            name="opt2"
                            placeholder="Enter option B"
                            class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label for="" class="block text-sm font-medium text-gray-700">Option C</label>
                        <input
                            type="text"
                            id=""
                            name="opt3"
                            placeholder="Enter option C"
                            class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>
                    <div>
                        <label for="" class="block text-sm font-medium text-gray-700">Option D</label>
                        <input
                            type="text"
                            id=""
                            name="opt4"
                            placeholder="Enter option D"
                            class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>
                </div>

                <!-- Correct Answer -->
                <div>
                    <label for="" class="block text-sm font-medium text-gray-700">Correct Option</label>
                    <select
                        id=""
                        name="correct_opt"
                        class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        required>
                        <option value="" disabled selected>Select the correct option</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="mb-10">
                    <button
                        type="submit"
                        name="save_question"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Save Question
                    </button>
                </div>
            </form>
        </div>

</body>

</html>
<?php

if(isset($_POST['save_question'])){
    $exam_name = $_POST['exam_name'];
    $question = $_POST['question'];
    $opt1 = $_POST['opt1'];
    $opt2 = $_POST['opt2'];
    $opt3 = $_POST['opt3'];
    $opt4 = $_POST['opt4'];
    $correct_opt = $_POST['correct_opt'];

    $query = $connect->query("insert into questions (exam_name, question, opt1, opt2, opt3, opt4, correct_opt)
    value('$exam_name','$question','$opt1','$opt2','$opt3','$opt4','$correct_opt')");

    if($query){
        msg("question Inserted Successfully");
        redirect("index.php");
    }
    else{
        msg("question not Inserted");
    }

}
