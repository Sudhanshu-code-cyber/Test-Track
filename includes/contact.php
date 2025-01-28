<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <?php include_once "includes/header.php"; ?>

    <div class="flex flex-col mt-14 lg:flex-row">
        <!-- Left Section -->
        <div class="lg:w-6/12 bg-gradient-to-br from-blue-100 to-blue-300 p-8 flex items-center justify-center">
            <div class="text-center space-y-6">
                <h2 class="text-5xl font-bold text-blue-800">Contact Us</h2>
                <p class="text-gray-700 text-lg">We are here to assist you. Reach out to us anytime!</p>
                <img src="https://examonline.in/wp-content/uploads/2023/03/Features-Overview-amico-1024x1024-1-768x739.png"
                    class="h-80 lg:h-[50vh] mx-auto rounded-lg shadow-lg" alt="Contact illustration">
            </div>
        </div>

        <!-- Right Section -->
        <div class="lg:w-6/12 bg-white py-12 px-8 lg:px-16">
            <div class="max-w-xl mx-auto">
                <div class="mb-8 text-center">
                    <h3 class="text-3xl font-bold text-blue-800">Get in Touch</h3>
                    <p class="text-gray-600">Fill out the form below, and we’ll get back to you soon.</p>
                </div>
                <form action="" method="post" class="space-y-6">
                    <div>
                        <label for="first_name" class="block text-gray-600 text-sm mb-1">First Name <span class="text-red-500">*</span></label>
                        <input type="text" name="name" id="first_name" placeholder="Your First Name"
                            class="w-full py-3 px-4 border rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="last_name" class="block text-gray-600 text-sm mb-1">Last Name <span class="text-red-500">*</span></label>
                        <input type="text" name="last_name" id="last_name" placeholder="Your Last Name"
                            class="w-full py-3 px-4 border rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-600 text-sm mb-1">Email <span class="text-red-500">*</span></label>
                        <input type="email" name="email" id="email" placeholder="Your Email"
                            class="w-full py-3 px-4 border rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-600 text-sm mb-1">Phone <span class="text-red-500">*</span></label>
                        <input type="tel" name="phone" id="phone" placeholder="Your Contact Number"
                            class="w-full py-3 px-4 border rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="organization" class="block text-gray-600 text-sm mb-1">Organization <span class="text-red-500">*</span></label>
                        <input type="text" name="organization" id="organization" placeholder="Your Organization Name"
                            class="w-full py-3 px-4 border rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="message" class="block text-gray-600 text-sm mb-1">Message <span class="text-red-500">*</span></label>
                        <textarea name="message" id="message" rows="4" placeholder="Please type more details"
                            class="w-full py-3 px-4 border rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div class="flex items-start gap-2">
                        <input type="checkbox" id="consent" required
                            class="mt-1 focus:ring-2 focus:ring-blue-500">
                        <label for="consent" class="text-gray-600 text-sm">I consent to Test-Track collecting and storing my data as outlined in their Privacy Policy.</label>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full py-3 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>