<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animation for fade-in */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">

    <div class="max-w-4xl mx-auto my-10 p-8 bg-white shadow-xl rounded-lg fade-in">

        <!-- Header Section -->
        <h1 class="text-3xl font-semibold text-center text-gray-800 mb-8">Add Questions</h1>

        <!-- Questions and Answers -->
        <div id="questionsContainer">
            <div class="mb-8 question">
                <label for="question_1" class="block text-lg font-semibold text-gray-700 mb-2">Question 1</label>
                <input type="text" name="questions[]"
                    class="w-full px-4 py-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out" required>

                <div class="mt-4">
                    <label class="block text-lg font-semibold text-gray-700 mb-2">Answer Choices</label>
                    <input type="text" name="answers[1][]"
                        class="w-full px-4 py-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out"
                        placeholder="Answer Choice 1" required>
                    <input type="text" name="answers[1][]"
                        class="w-full px-4 py-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out"
                        placeholder="Answer Choice 2" required>
                    <input type="text" name="answers[1][]"
                        class="w-full px-4 py-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out"
                        placeholder="Answer Choice 3" required>
                    <input type="text" name="answers[1][]"
                        class="w-full px-4 py-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out"
                        placeholder="Answer Choice 4" required>
                </div>

                <div class="mt-6">
                    <label class="block text-lg font-semibold text-gray-700 mb-2">Correct Answers (comma-separated, e.g.,
                        0,2 for choices 1 and 3)</label>
                    <input type="text" name="correct_answers[1]"
                        class="w-full px-4 py-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out" required>
                </div>
            </div>
        </div>

        <!-- Add More Question Button -->
        <div class="flex justify-center mt-6">
            <button type="button" id="addQuestion"
                class="bg-blue-500 text-white px-8 py-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-200">
                Add More Questions
            </button>
        </div>
    </div>

</body>

</html>
