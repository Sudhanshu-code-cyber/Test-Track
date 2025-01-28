<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Test</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <?php include_once "header.php"; ?>

    <div class="container mt-10 mx-auto px-6 py-10 bg-white shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold mb-8 text-center text-blue-600">Take Test</h1>

        <p class="text-gray-700 mb-6 text-center">Please fill out the details below to start your test. <br> Ensure all fields are filled correctly to avoid any issues during the test.</p>

        <!-- Important Notes Section -->
        <div class="bg-yellow-100 p-4 mb-6 rounded-lg border border-yellow-300">
            <h2 class="font-semibold text-lg text-yellow-800">Important Notes:</h2>
            <ul class="list-disc pl-5 mt-2 text-gray-700">
                <li>Please make sure all the details are accurate.</li>
                <li>The test duration is based on the type of test you choose.</li>
                <li>Ensure you have a stable internet connection for the test.</li>
            </ul>
        </div>

        <form action="" method="POST">
            <!-- Test Details -->
            <div class="flex flex-col gap-5">
                <h1 class="bg-gray-500 text-white px-4 py-3 rounded text-2xl font-semibold">Test Details</h1>
                <div class="grid grid-cols-2 gap-5 mb-5">
                    <div>
                        <label for="test_title" class="block text-lg font-semibold text-gray-700">Full Name</label>
                        <input type="text" id="test_title" name="test_title" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" placeholder="Enter your full name" required>
                    </div>
                    <div>
                        <label for="contact" class="block text-lg font-semibold text-gray-700">Contact</label>
                        <input type="text" id="contact" name="contact" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" placeholder="Enter your contact number" required>
                    </div>
                    <div>
                        <label for="email" class="block text-lg font-semibold text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" placeholder="Enter your email address" required>
                    </div>
                    <div>
                        <label for="education" class="block text-lg font-semibold text-gray-700">Education</label>
                        <input type="text" id="education" name="education" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" placeholder="Enter your highest education" required>
                    </div>
                    <div>
                        <label for="test_duration" class="block text-lg font-semibold text-gray-700">Test Duration (in minutes)</label>
                        <input type="number" id="test_duration" name="test_duration" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" placeholder="Enter duration of the test" required>
                    </div>
                    <div>
                        <label for="test_subject" class="block text-lg font-semibold text-gray-700">Test Subject</label>
                        <input type="text" id="test_subject" name="test_subject" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" placeholder="Enter test subject" required>
                    </div>
                    <div>
                        <label for="institution_name" class="block text-lg font-semibold text-gray-700">School/College/University Name</label>
                        <input type="text" id="institution_name" name="institution_name" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" placeholder="Enter your institution name" required>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mt-6 text-center">
                <button type="submit" class="bg-green-500 text-white px-8 py-3 rounded-lg hover:bg-green-600 transition duration-200">Start Test Now</button>
            </div>
        </form>
    </div>
</body>

</html>
