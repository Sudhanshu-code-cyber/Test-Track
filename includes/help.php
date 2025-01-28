<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Help Desk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Student Help Desk</h1>
            <nav>
                <a href="#form" class="text-white hover:underline px-4">Submit Query</a>
                <a href="#faq" class="text-white hover:underline px-4">FAQs</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-blue-500 text-white py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">How can we help you today?</h2>
            <p class="text-lg mb-8">Reach out to us with any exam-related issues, and we’ll assist you promptly.</p>
            <a href="#form" class="bg-white text-blue-500 px-6 py-3 rounded-lg font-semibold hover:bg-gray-200">Submit a Query</a>
        </div>
    </section>

    <!-- Query Form Section -->
    <section id="form" class="py-16 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8">Submit Your Query</h2>
            <form action="submit_query.php" method="POST" class="bg-white shadow-md rounded-lg p-8 max-w-3xl mx-auto">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Your Name</label>
                    <input type="text" id="name" name="name" required placeholder="Enter your full name"
                        class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Your Email</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email address"
                        class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="exam" class="block text-gray-700 font-medium mb-2">Exam Name</label>
                    <input type="text" id="exam" name="exam_name" required placeholder="Enter the exam name"
                        class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="issue" class="block text-gray-700 font-medium mb-2">Issue Type</label>
                    <select id="issue" name="issue_type" required
                        class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="" disabled selected>Select issue type</option>
                        <option value="technical">Technical Issue</option>
                        <option value="schedule">Schedule Issue</option>
                        <option value="result">Result Issue</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                    <textarea id="description" name="description" rows="4" required
                        placeholder="Describe your issue in detail"
                        class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                <button type="submit"
                    class="w-full bg-blue-500 text-white font-semibold py-3 rounded-lg hover:bg-blue-600">Submit Query</button>
            </form>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-16 bg-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8">Frequently Asked Questions</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- FAQ 1 -->
                <div class="p-6 border border-gray-200 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">How do I register for an exam?</h3>
                    <p class="text-gray-600">You can register for exams through the student portal. If you face any issues, please contact us.</p>
                </div>
                <!-- FAQ 2 -->
                <div class="p-6 border border-gray-200 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">What should I do if I miss an exam?</h3>
                    <p class="text-gray-600">Please submit a query through the help desk with a valid reason, and we’ll assist you further.</p>
                </div>
                <!-- FAQ 3 -->
                <div class="p-6 border border-gray-200 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Can I change my exam center?</h3>
                    <p class="text-gray-600">Changing exam centers is subject to availability. Submit a query, and we’ll guide you.</p>
                </div>
                <!-- FAQ 4 -->
                <div class="p-6 border border-gray-200 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">What should I do if I face technical issues during the exam?</h3>
                    <p class="text-gray-600">Report the issue immediately through the help desk. Our team will assist you as quickly as possible.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Student Help Desk. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>