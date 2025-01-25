<?php
// include_once "../config/connect.php";
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
            <form action="save_question.php" method="POST" class="space-y-6 border border-gray-200 overflow-y-scroll h-[88vh] p-5 rounded shadow-md">
                <!-- Select Exam -->
                <div>
                    <label for="exam" class="block text-sm font-medium text-gray-700">Select Exam</label>
                    <select
                        id="exam"
                        name="exam_id"
                        class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        required>
                        <option value="" disabled selected>Select an exam</option>
                        
                    </select>
                </div>

                <!-- Question Text -->
                <div>
                    <label for="questionText" class="block text-sm font-medium text-gray-700">Question</label>
                    <textarea
                        id="questionText"
                        name="question_text"
                        rows="3"
                        placeholder="Enter the question"
                        class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        required></textarea>
                </div>

                <!-- Options -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label for="optionA" class="block text-sm font-medium text-gray-700">Option A</label>
                        <input
                            type="text"
                            id="optionA"
                            name="option_a"
                            placeholder="Enter option A"
                            class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>
                    <div>
                        <label for="optionB" class="block text-sm font-medium text-gray-700">Option B</label>
                        <input
                            type="text"
                            id="optionB"
                            name="option_b"
                            placeholder="Enter option B"
                            class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label for="optionC" class="block text-sm font-medium text-gray-700">Option C</label>
                        <input
                            type="text"
                            id="optionC"
                            name="option_c"
                            placeholder="Enter option C"
                            class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>
                    <div>
                        <label for="optionD" class="block text-sm font-medium text-gray-700">Option D</label>
                        <input
                            type="text"
                            id="optionD"
                            name="option_d"
                            placeholder="Enter option D"
                            class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>
                </div>

                <!-- Correct Answer -->
                <div>
                    <label for="correctOption" class="block text-sm font-medium text-gray-700">Correct Option</label>
                    <select
                        id="correctOption"
                        name="correct_option"
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
                        class="w-full bg-blue-600 text-white py-3 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Save Question
                    </button>
                </div>
            </form>
        </div>

</body>

</html>