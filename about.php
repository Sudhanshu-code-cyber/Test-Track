<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">
    <?php include_once "includes/header.php"; ?>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r mt-14 from-blue-500 to-purple-500 text-white py-16 text-center">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl lg:text-6xl font-bold mb-4">About Us</h1>
            <p class="text-lg lg:text-xl">Empowering Innovations for a Better Tomorrow</p>
        </div>
    </section>

    <!-- Mission and Vision -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 text-center lg:text-left">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-3xl font-bold mb-4">Our Mission</h2>
                    <p class="text-gray-600">Our mission is to deliver innovative solutions that drive progress and create lasting impact for communities worldwide.</p>
                </div>
                <div>
                    <h2 class="text-3xl font-bold mb-4">Our Vision</h2>
                    <p class="text-gray-600">We envision a future where technology and collaboration empower individuals and businesses to thrive.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-8">Our Story</h2>
            <div class="timeline space-y-8">
                <div class="flex items-center">
                    <div class="w-3 h-3 bg-blue-500 rounded-full mr-4"></div>
                    <p class="text-gray-600">Founded in 2010 with a vision to revolutionize the tech industry.</p>
                </div>
                <div class="flex items-center">
                    <div class="w-3 h-3 bg-blue-500 rounded-full mr-4"></div>
                    <p class="text-gray-600">Achieved milestone of 1000+ clients in 2015.</p>
                </div>
                <div class="flex items-center">
                    <div class="w-3 h-3 bg-blue-500 rounded-full mr-4"></div>
                    <p class="text-gray-600">Expanded globally with offices in 5 countries by 2020.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet the Team -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Meet the Team</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Jane Doe</h3>
                    <p class="text-gray-600">CEO</p>
                </div>
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">John Smith</h3>
                    <p class="text-gray-600">CTO</p>
                </div>
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Emily Johnson</h3>
                    <p class="text-gray-600">Marketing Head</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-8">What Our Clients Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-6 bg-white rounded-lg shadow">
                    <p class="text-gray-600 italic">"This company has transformed the way we do business. Highly recommended!"</p>
                    <h4 class="text-lg font-semibold mt-4">- Sarah Lee</h4>
                </div>
                <div class="p-6 bg-white rounded-lg shadow">
                    <p class="text-gray-600 italic">"Innovative solutions and a professional team. Simply amazing!"</p>
                    <h4 class="text-lg font-semibold mt-4">- Michael Brown</h4>
                </div>
                <div class="p-6 bg-white rounded-lg shadow">
                    <p class="text-gray-600 italic">"Their commitment to excellence is unmatched. We couldn't be happier!"</p>
                    <h4 class="text-lg font-semibold mt-4">- Amanda Green</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-blue-500 text-white text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-4">Ready to Work With Us?</h2>
            <p class="mb-8">Let’s build something amazing together.</p>
            <a href="contact.php" class="bg-white text-blue-500 font-semibold py-3 px-6 rounded shadow-lg hover:bg-gray-100">Contact Us</a>
        </div>
    </section>

    <?php 
    // include_once "includes/footer.php"; ?>
</body>

</html>