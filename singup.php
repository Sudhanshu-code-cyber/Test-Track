<?php
include_once "config/connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Test-Track</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</head>

<body class="bg-gray-100">
    <!-- Main Container -->
    <div class="flex h-screen overflow-hidden">
        <!-- Left Section -->
        <div class="w-3/12 bg-gradient-to-br from-green-400 to-teal-600 text-white flex flex-col justify-center items-center relative p-10">
            <div id="left-decor" class="absolute inset-0 bg-green-500 opacity-10 rounded-full"></div>
            <h1 class="text-5xl font-extrabold mb-4 opacity-0 translate-y-10" id="brand-title">TEST TRACK</h1>
            <p class="text-lg text-center opacity-0 translate-y-10" id="brand-description">
                Experience the future of performance monitoring. Sign up today to get started!
            </p>
        </div>

        <!-- Right Section -->
        <div class="w-9/12 flex justify-center items-center bg-gray-50 relative">
            <div id="right-decor" class="absolute h-64 w-64 bg-green-400 rounded-full blur-xl opacity-20 -top-10 right-20"></div>
            <div id="right-decor-2" class="absolute h-48 w-48 bg-teal-500 rounded-full blur-2xl opacity-20 bottom-10 left-10"></div>
            <div class="w-full max-w-md bg-white rounded-xl shadow-2xl p-8 transform scale-95 opacity-0" id="signup-card">
                <!-- Header -->
                <div class="text-center mb-6">
                    <h2 class="text-4xl font-bold text-green-600 opacity-0 translate-y-10" id="signup-title">Create Your Account</h2>
                    <p class="text-gray-500 opacity-0 translate-y-10" id="signup-subtitle">
                        Join us and track your performance with ease.
                    </p>
                </div>

                <!-- Form -->
                <form action="" method="POST" class="space-y-6">
                    <!-- Name Input -->
                    <div class="flex space-x-3">
                        <input
                            type="text"
                            id="first_name"
                            name="firstname"
                            placeholder="First Name"
                            class="w-1/2 px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                            required />

                        <input
                            type="text"
                            id="last_name"
                            name="lastname"
                            placeholder="Last Name"
                            class="w-1/2 px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                            required />
                    </div>
                    <div class="flex gap-4">
                        <div class="-mt-1">
                            <label for="gender" class="text-sm text-gray-600 mt-1">Gender</label>
                            <div class="flex border py-2 px-8 text-gray-600  rounded-md">
                                <select name="gender" id="" class="py-1 ">
                                    <option value="" class="text-gray-600">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Custom</option>

                                </select>
                            </div>
                            </label>
                        </div>
                        <div>
                            <label for="contact" class="block text-sm font-medium text-gray-600">Contact</label>
                            <input
                                type="number"
                                id="number"
                                name="contact"
                                placeholder="Enter your Contact"
                                class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                required />
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Enter your email"
                            class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                            required />
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Create a password"
                            class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                            required />
                    </div>



                    <!-- Submit Button -->
                    <button
                        type="submit"
                        name="singhup"
                        class="w-full bg-green-600 text-white font-bold py-3 rounded-lg hover:bg-teal-700 transition-transform transform hover:scale-105">
                        Sign Up
                    </button>
                    <?php


                    if (isset($_POST['singhup'])) {
                        $firstname = $_POST['firstname'];
                        $lastname = $_POST['lastname'];
                        $gender = $_POST['gender'];
                        $contact = $_POST['contact'];
                        $email = $_POST['email'];
                        $password = md5($_POST['password']);

                        $query = mysqli_query($connect,"insert into users (firstname, lastname, gender ,contact ,email ,password) values('$firstname','$lastname','$gender','$contact','$email','$password')");
                        // if (empty($firstname)) {
                        // } else if (!preg_match("/^[A-z ]+$/", $firstname)) {
                        //     echo
                        //     "<div class='flex flex-1 justify-center items-center bg-blue-400 py-1 rounded-md'>Name is Invaild</div>";
                        // }


                        // if (empty($contact)) {
                        //     echo "<div class='flex flex-1 justify-center items-center bg-blue-400 py-1 rounded-md   '>Contact is required</div>";
                        // } else if (!preg_match("/^[0-9]{10}$/", $contact)) {
                        //     echo
                        //     "<div class='flex flex-1 justify-center items-center bg-blue-400 py-1 rounded-md'>Number is Invaild</div>";
                        // }
                        // if (empty($email)) {
                        //     echo "<div class='flex flex-1 justify-center items-center bg-blue-400 py-1flex flex-1 justify-center items-center  rounded-md   '>Email is required</div>";
                        // } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        //     echo "<div class='flex flex-1 justify-center items-center bg-blue-400 py-1flex flex-1 justify-center items-center  rounded-md   '>Invalid email</div>";
                        // }
                        if($query){
                            redirect("login.php");

                        }
                        else{
                                msg('something went wrong');
                                redirect("../singup.php");
                        }
                    }
                    ?>




                </form>

                <!-- Footer -->
                <div class="text-center mt-6">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href="" class="text-green-600 font-semibold hover:underline">Log In</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // GSAP Animations
        gsap.timeline()
            .to("#brand-title", {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: "power4.out"
            })
            .to("#brand-description", {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: "power4.out"
            }, "-=0.5")
            .to("#signup-card", {
                opacity: 1,
                scale: 1,
                duration: 1,
                ease: "elastic.out(1, 0.5)"
            }, "-=0.7")
            .to("#signup-title", {
                opacity: 1,
                y: 0,
                duration: 0.8,
                ease: "power3.out"
            }, "-=0.5")
            .to("#signup-subtitle", {
                opacity: 1,
                y: 0,
                duration: 0.8,
                ease: "power3.out"
            }, "-=0.3");
    </script>
</body>

</html>