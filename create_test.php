<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Test</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <?php include_once "includes/header.php"; ?>

    <div class="container mt-10 mx-auto px-6 py-10">
        <h1 class="text-3xl font-bold mb-8">Create a New Test</h1>

        <form action="" method="POST">
            <!-- Test Details -->
            <div class="flex flex-col gap-2">
                <h1 class="bg-gray-500 text-white px-3 py-2 w-full rounded text-2xl font-semibold">Test Details</h1>
                <div class="grid grid-cols-2 gap-5 mb-5">
                    <div>
                        <label for="test_title" class="block text-lg font-semibold text-gray-700">Test Title</label>
                        <input type="text" id="test_title" name="test_title"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="test_subject" class="block text-lg font-semibold text-gray-700">Test Subject</label>
                        <input type="text" id="test_subject" name="test_subject"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="test_duration" class="block text-lg font-semibold text-gray-700">Test Duration</label>
                        <input type="number" id="test_duration" name="test_duration"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="test_subject" class="block text-lg font-semibold text-gray-700">Test Subject</label>
                        <input type="text" id="test_subject" name="test_subject"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="total_marks" class="block text-lg font-semibold text-gray-700">Total Marks</label>
                        <input type="text" id="total_marks" name="total_marks"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="passing_marks" class="block text-lg font-semibold text-gray-700">Passing Marks</label>
                        <input type="text" id="passing_marks" name="passing_marks"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                    
                </div>
            </div>







            <!-- Questions and Answers -->
            <div id="questionsContainer">
            <h1 class="bg-gray-500 text-white px-3 py-2 w-full rounded text-2xl font-semibold">Add Questions</h1>
            <div class="mb-6 question">
                    <label for="question_1" class="block text-lg font-semibold text-gray-700">Question 1</label>
                    <input type="text" name="questions[]"
                        class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>

                    <div class="mt-4">
                        <label class="block text-lg font-semibold text-gray-700">Answer Choices</label>
                        <input type="text" name="answers[1][]"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg"
                            placeholder="Answer Choice 1" required>
                        <input type="text" name="answers[1][]"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg"
                            placeholder="Answer Choice 2" required>
                        <input type="text" name="answers[1][]"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg"
                            placeholder="Answer Choice 3" required>
                        <input type="text" name="answers[1][]"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg"
                            placeholder="Answer Choice 4" required>
                    </div>

                    <div class="mt-4">
                        <label class="block text-lg font-semibold text-gray-700">Correct Answers (comma-separated, e.g.,
                            0,2 for choices 1 and 3)</label>
                        <input type="text" name="correct_answers[1]"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                </div>
            </div>

            <!-- Add More Question Button -->
            <button type="button" id="addQuestion"
                class="mt-4 bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">Add More Questions</button>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600">Create
                    Test</button>
            </div>
        </form>
    </div>
</body>

</html>