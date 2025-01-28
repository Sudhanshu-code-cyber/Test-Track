<?php include_once "config/connect.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

 <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />


    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* Custom animation for fade-in effect */
        .fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

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

        /* Image animation */
        .zoom-in {
            transition: transform 0.3s ease-in-out;
        }

        .zoom-in:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="font-poppins">

    <?php include_once "includes/header.php"; ?>

    <!--hero's section -->

    <div class="bg-orange-50 h-[100vh]  flex flex-1 px-[5%] mt-1 space-y-8 md:space-y-0 md:space-x-10">
        <div class="flex-1 space-y-6 p-10 flex flex-col justify-center fade-in">
            <h1 class="font-medium text-4xl md:text-5xl text-[#1E2A47]">Simply Powerful</h1>
            <h2 class="font-medium text-2xl md:text-4xl text-[#1E2A47]">Online Exams</h2>
            <p class="text-lg md:text-xl text-[#3D5170]">Your Path to Exam Success Starts Here – Access a Library of
                Practice <br> Tests, Timed Quizzes, and Detailed Feedback to Boost Your Confidence.</p>

            <div class="flex gap-5">
                <a href="#"
                    class="flex justify-center items-center cursor-pointer text-lg rounded-full text-white bg-[#112D4E] hover:bg-[#3F72AF] px-5 py-2 transition-all duration-300 transform hover:scale-105">
                    Start Practicing Now
                </a>
                <a href="#"
                    class="flex justify-center items-center cursor-pointer text-lg rounded-full border border-gray-500 hover:bg-[#3F72AF] hover:text-white px-5 py-2 transition-all duration-300 transform hover:scale-105">
                    Book a Demo
                </a>
            </div>
            <p class="text-sm text-[#3D5170]">15-day free trial. No credit card required</p>
        </div>

        <div class="flex-1 p-10 flex justify-center items-center">
            <img src="image/home-hero-picture.png" alt="Online Exams"
                class="w-full md:w-3/4 lg:w-2/3 rounded-lg  zoom-in" />
        </div>
    </div>

    <!--body section -->
    <div class="flex flex-col gap-5 justify-center items-center mt-4 px-[10%]">
        <h1 class="font-semibold text-[#1E2A47] text-4xl">Welcome to TestTrack - Your Online Exam Partner</h1>
        <p class="text-lg text-gray-600">Let's Create or Conduct Online Examination for Your Prestigious Institute
            and/or Organization.</p>

        <div class="grid grid-cols-5 gap-6 mt-5">
            <a href="create_test.php"
                class="flex flex-col items-center justify-center  gap-3 px-5 py-4 h-50 border-r border-gray-200 hover:text-bule-400 cursor-pointer">

                <img src="image/Create-Online-Tests.png" alt="Create Online Test"
                    class="h-16 w-16 mb-4 zoom-in transition-transform transform hover:scale-110">
                <h1 class="text-lg hover:text-blue-500 font-semibold text-center text-gray-800">Create Online Test</h1>
                <p href="" class="text-sm font-medium text-blue-600 hover:text-blue-800 mt-4">View details</p>
                
    </a>

            <a href="includes/take_test.php"
                class="flex flex-col items-center justify-center gap-3 px-5 py-4 h-50 border-r border-gray-200 hover:text-bule-400 cursor-pointer">
                <img src="image/Statical-Report-of-Your-Test.png" alt="Create Online Test"
                    class="h-16 w-16 mb-4 transition-transform transform hover:scale-110">
                <h1 class="text-lg font-semibold text-center text-gray-800">Take Test Now</h1>
                <p  class="text-sm font-medium text-blue-600 hover:text-blue-800 mt-4">View details</p>
    </a>

            <div
                class="flex flex-col items-center justify-center gap-3 px-5 py-4 h-50 border-r border-gray-200 hover:text-bule-400 cursor-pointer">
                <img src="image/Organize-Private-Test.png" alt="Create Online Test"
                    class="h-16 w-16 mb-4 transition-transform transform hover:scale-110">
                <h1 class="text-lg font-semibold text-center text-gray-800">Shedule Your Test</h1>
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800 mt-4">View details</a>
            </div>

            <div
                class="flex flex-col items-center justify-center gap-3 px-5 py-4 h-50 border-r border-gray-200 hover:text-bule-400 cursor-pointer">
                <img src="image/Attempt-Online-Test.png" alt="Create Online Test"
                    class="h-16 w-16 mb-4 transition-transform transform hover:scale-110">
                <h1 class="text-lg font-semibold text-center text-gray-800">Our Upcoming Test</h1>
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800 mt-4">View details</a>
            </div>



            <div
                class="flex flex-col items-center justify-center gap-3 px-5 py-4 h-50 border-r border-gray-200 hover:text-bule-400 cursor-pointer">
                <img src="image/Add-Question_icon.png" alt="Create Online Test"
                    class="h-16 w-16 mb-4 transition-transform transform hover:scale-110">
                <h1 class="text-lg font-semibold text-center text-gray-800">AddQuestion Test</h1>
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800 mt-4">View details</a>
            </div>
        </div>

    </div>

    <div class="flex flex-1  mt-5 bg-[#112D4E]">

        <div class="w-6/12">
            <div class="flex flex-col px-10 py-20  gap-2">
                <p class="text-sm text-gray-100">Test Track</p>
                <h1 class="text-3xl text-white">The Most Versatile Online Assessment <br>Software that Measures <span
                        class="text-[#3F60AF]">Skills</span>, <br>
                    <span class="text-purple-500">Personality</span> and <span class="text-green-400">Ability</span>
                </h1>

            </div>
        </div>
        <div class="6/12">

            <div class="flex flex-1 flex-col py-22 gap-5 ">
                <div class=" flex flex-1 w-full   gap-5 px-10 ">
                    <div class="flex gap-2 w-[48vh] justify-between items-center bg-white shadow-lg rounded px-3 py-2">
                        <div class="flex gap-2">
                            <img src="image/test-1.svg" alt="">
                            <p class="text-sm font-semibold">Explore Psychometrics Test</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4 text-green-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>

                    </div>

                    <div class="flex gap-2 w-[48vh] justify-between items-center bg-white shadow-lg rounded px-3 py-2">
                        <div class="flex gap-2">
                            <img src="image/test-2.svg" alt="">
                            <p class="text-sm font-semibold">Explore coding Test</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4 text-green-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>

                    </div>



                </div>

                <div class=" flex flex-1 w-full   gap-5 px-10 ">
                    <div class="flex gap-2 w-[48vh] justify-between items-center bg-white shadow-lg rounded px-3 py-2">
                        <div class="flex gap-2">
                            <img src="image/test-3.svg" alt="">
                            <p class="text-sm font-semibold">Explore Behavioral Test</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4 text-green-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>

                    </div>

                    <div class="flex gap-2 w-[48vh] justify-between items-center bg-white shadow-lg rounded px-3 py-2">
                        <div class="flex gap-2">
                            <img src="image/test-4.svg" alt="">
                            <p class="text-sm font-semibold">Explore Domain Test</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4 text-green-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>

                    </div>



                </div>

                <div class=" flex flex-1 w-full   gap-5 px-10 ">
                    <div class="flex gap-2 w-[48vh] justify-between items-center bg-white shadow-lg rounded px-3 py-2">
                        <div class="flex gap-2">
                            <img src="image/test-5.svg" alt="">
                            <p class="text-sm font-semibold">Explore Aptitude Test</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4 text-green-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>

                    </div>

                    <div class="flex gap-2 w-[48vh] justify-between items-center bg-white shadow-lg rounded px-3 py-2">
                        <div class="flex gap-2">
                            <img src="image/test-6.svg" alt="">
                            <p class="text-sm font-semibold">Explore communication skills Test</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4 text-green-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>

                    </div>



                </div>


            </div>

        </div>

    </div>
    <!--subjets-->
    <div class="flex py-2 flex-1 bg-[#DBE2EF]">
        <div class=" w-10/12 flex justify-center ml-[24%]  flex-1    ">
            <h1 class="text-4xl   ml-10  ">Featured Tests</h1>

        </div>
        <div class="w-3/12">
            <!-- Search Form -->
            <form action="index.php" method="get" class="flex justify-center items-center gap-3">
                <input type="search" name="search" placeholder="Search subjects..." id="" size="20"
                    class="px-4 py-2 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-[#112D4E]" />
                <input type="submit" name="find" id="" value="GO"
                    class="bg-blue-900  cursor-pointer text-white px-6 py-2 rounded-lg hover:bg-blue-800" />
            </form>
        </div>

    </div>
    <div class="flex justify-center items-center py-5 gap-3 bg-orange-50 flex-col">


        <p>You are just a single click away to rank yourself in our popular tests - TestTrack
        </p>
        <div class="grid grid-cols-5 mt-5 gap-5 ">

            <?php
            if (isset($_GET['find'])) {
                $search = $_GET['search'];
                $callingtest = mysqli_query($connect, "select * from subject where subject_name like '%$search%'");
            } else {
                $callingtest = mysqli_query($connect, "select * from subject");
            }
            while ($test = mysqli_fetch_array($callingtest)):
                ?>

                <div
                    class="py-3 px-5 justify-center items-center hover:text-white zoom-in hover:bg-[#112D4E]  cursor-pointer  border border-gray-500">

                    <p class="flex justify-center text-sm font-medium   items-center"><?= $test['subject_name']; ?></p>
                    
                </div>
            <?php endwhile; ?>

        </div>
    </div>
    <?php include_once 'includes/footer.php'; ?>



    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>