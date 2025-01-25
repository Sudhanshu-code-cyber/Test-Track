<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="">
    <?php  include_once "includes/header.php";?>
    <!-- Header Section -->
    <div class="flex flex-wrap lg:flex-nowrap">
        <!-- Text Section -->
        <div class="w-full lg:w-6/12  from-blue-50 to-white">
            <div class="flex flex-col h-auto lg:h-[80vh] justify-center p-10 lg:p-16">
                <h2 class="text-5xl font-bold text-blue-600 leading-tight">About Us</h2>
                <p class="text-gray-700 mt-6 text-lg leading-relaxed">
                    Welcome to ExamOnline, the innovative remote proctoring solution that’s transforming the way online
                    exams are conducted. Our mission is to provide the most secure, efficient, and cost-effective
                    solution to educational institutions and corporations across the world.
                </p>
                <a href="#" class="mt-8 inline-block px-6 py-3 bg-pink-500 text-white text-lg font-semibold rounded-md shadow-md hover:bg-pink-600 hover:shadow-lg transition duration-300">
                    Learn More
                </a>
            </div>
        </div>

        <!-- Image Section -->
        <div class="w-full lg:w-6/12 relative ">
            <div class="p-10 flex justify-center items-center h-full">
                <img src="https://examonline.in/wp-content/uploads/2023/03/about-us-1536x1112.png" alt="About Us"
                    class="rounded-lg  transform hover:scale-105 transition duration-300">
            </div>
        </div>
    </div>

    <!-- Our Story Section -->
    <div class="mx-8 md:mx-[10%] mt-16 bg-gradient-to-r from-pink-50 to-red-100 rounded-lg shadow-lg">
        <div class="p-10 text-center">
            <h3 class="text-4xl font-bold text-pink-600">Our Story</h3>
            <hr class="mt-4 border-2 border-pink-600 w-24 mx-auto">
            <p class="text-gray-800 mt-6 text-lg leading-relaxed">
                Founded in 2009, ExamOnline was created with the vision of transforming the traditional approach to exam
                administration. Our founders recognized the need for a secure, reliable, and easy-to-use remote
                proctoring solution, and began developing a product that would meet the evolving demands of modern-day
                exams.
                <br><br>
                Since then, we have worked tirelessly to create a platform that offers the highest level of security,
                reliability, and accessibility to institutions and corporations of all sizes.
            </p>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="flex flex-wrap mt-16 mx-8 md:mx-[10%]">
        <!-- Mission Content -->
        <div class="w-full lg:w-6/12 p-8">
            <h3 class="text-4xl font-bold text-blue-600">Our Mission</h3>
            <p class="text-gray-700 mt-6 text-lg leading-relaxed">
                At ExamOnline, we believe that remote proctoring solutions can level the playing field and provide equal
                opportunities for students and job applicants, regardless of their location. Our mission is to empower
                educational institutions and corporations with the most advanced technology, enabling them to conduct
                online exams with confidence.
                <br><br>
                We are committed to delivering innovative and effective solutions that meet the unique needs of our
                clients, while prioritizing the highest level of security, reliability, and accessibility.
            </p>
            <a href="#" class="mt-6 inline-block px-6 py-3 bg-blue-500 text-white text-lg font-semibold rounded-md shadow-md hover:bg-blue-600 hover:shadow-lg transition duration-300">
                Get in Touch
            </a>
        </div>

        <!-- Mission Image -->
        <div class="w-full lg:w-6/12 p-8 flex justify-center items-center">
            <img src="https://examonline.in/wp-content/uploads/2023/03/achievement.png" alt="Mission"
                class="rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
        </div>
    </div>

    <!-- Additional Features Section -->
    <div class="mx-8 md:mx-[10%] mt-16 p-10 bg-blue-50 rounded-lg shadow-lg">
        <h3 class="text-4xl font-bold text-blue-600 text-center">Why Choose Us?</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
                <h4 class="text-2xl font-semibold text-blue-500">Advanced Technology</h4>
                <p class="text-gray-700 mt-4">We leverage cutting-edge technologies to ensure secure and seamless online exams.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
                <h4 class="text-2xl font-semibold text-blue-500">Global Reach</h4>
                <p class="text-gray-700 mt-4">Our platform is designed to cater to clients from all over the world.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
                <h4 class="text-2xl font-semibold text-blue-500">User-Friendly Interface</h4>
                <p class="text-gray-700 mt-4">Our intuitive design ensures an effortless experience for all users.</p>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="text-center py-6 mt-16 text-gray-500 bg-gray-100">
        <p>© 2025 ExamOnline. All Rights Reserved.</p>
    </footer>

</body>

</html>