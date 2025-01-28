<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Test-Track</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@tailwindcss/aspect-ratio"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</head>

<body class="bg-gray-50">
    <!-- Main Container -->
    <div class="flex h-screen overflow-hidden">
        <!-- Left Section -->
        <div class="w-3/12 bg-gradient-to-br from-blue-500 to-purple-600 text-white flex flex-col justify-center items-center p-10 relative">
            <h1 class="text-5xl font-extrabold mb-4 opacity-0 translate-y-10 transition-transform" id="brand-title">TEST TRACK</h1>
            <p class="text-lg text-center opacity-0 translate-y-10 transition-transform" id="brand-description">
                A reliable solution to monitor, manage, and track your performance. Login to get started!
            </p>
            <!-- Decorative Circles -->
            <div class="absolute -top-10 -left-10 h-32 w-32 bg-white/10 rounded-full"></div>
            <div class="absolute -bottom-10 -right-10 h-40 w-40 bg-white/10 rounded-full"></div>
        </div>

        <!-- Right Section -->
        <div class="w-9/12 flex justify-center items-center">
            <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8 transform scale-95 opacity-0 transition-transform" id="login-card">
                <!-- Header -->
                <div class="text-center mb-6">
                    <h2 class="text-3xl font-bold text-blue-600 opacity-0 translate-y-10 transition-transform" id="login-title">Welcome</h2>
                    <p class="text-gray-500 opacity-0 translate-y-10 transition-transform" id="login-subtitle">Login to your Test-Track account</p>
                </div>

                <!-- Form -->
                <form action="actions/login.php" method="POST" class="space-y-4">
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Enter your email"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required />
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required />
                    </div>

                    <!-- Remember Me and Forgot Password -->
                    <div class="flex items-center justify-between">
                        <label class="inline-flex items-center">
                            <input
                                type="checkbox"
                                class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" />
                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                        <a href="#" class="text-sm text-blue-600 hover:underline">Forgot Password?</a>
                    </div>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        name="login"
                        class="w-full bg-blue-600 text-white font-bold py-2 rounded-lg hover:bg-blue-700 transition-transform transform hover:scale-105">
                        Log In
                    </button>
                </form>

                <!-- Footer -->
                <div class="text-center mt-6">
                    <p class="text-sm text-gray-600">
                        Don't have an account?
                        <a href="singup.php" class="text-blue-600 font-semibold hover:underline">Sign Up</a>
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
                duration: 1
            })
            .to("#brand-description", {
                opacity: 1,
                y: 0,
                duration: 1
            }, "-=0.5")
            .to("#login-card", {
                opacity: 1,
                scale: 1,
                duration: 1
            }, "-=0.5")
            .to("#login-title", {
                opacity: 1,
                y: 0,
                duration: 1
            }, "-=0.7")
            .to("#login-subtitle", {
                opacity: 1,
                y: 0,
                duration: 1
            }, "-=0.5");
    </script>
</body>

</html>