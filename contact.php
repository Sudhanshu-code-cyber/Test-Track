<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
</head>

<body>
    <?php include_once "includes/header.php"; ?>
    <div class="flex">
        <div class="w-6/12">
            <div class="flex flex-col gap-4 justify-center items-center h-[150vh]">
                <h2 class="text-5xl font-bold text-[#112D4E]">Contact Us</h2>
                <img src="https://examonline.in/wp-content/uploads/2023/03/Features-Overview-amico-1024x1024-1-768x739.png" class="h-[80vh]">

            </div>
        </div>
        <div class="w-6/12">
            <div class="flex flex-1 justify-center item-center pt-[25%] pr-5">
                <div class=" bg-gray-300 w-full">
                    <div class="p-4">
                        <form action="" method="post" class="flex flex-col gap-4 overflow-y-scroll h-[80vh] p-10 bg-white">
                            <div class="flex flex-col gap-1">
                                <label for="" class="text-gray-600 text-sm">First Name <span class="text-red-500">*</span></label>
                                <input type="text" name="name" placeholder="Your First Name" class="py-2 px-2 bg-[#DBE2EF] text-sm text-blue-500  rounded">
                            </div>
                            <div class="flex flex-col gap-1">
                                <label for="" class="text-gray-600 text-sm">Last Name <span class="text-red-500">*</span></label>
                                <input type="text" name="last_name" placeholder="Your Last Name" class="py-2 px-2 bg-[#DBE2EF] text-sm text-blue-500  rounded">
                            </div>
                            <div class="flex flex-col gap-1">
                                <label for="" class="text-gray-600 text-sm">Email <span class="text-red-500">*</span></label>
                                <input type="email" name="email" placeholder="Your Email" class="py-2 px-2 bg-[#DBE2EF] text-sm text-blue-500  rounded">
                            </div>
                            <div class="flex flex-col gap-1">
                                <label for="" class="text-gray-600 text-sm">Phone <span class="text-red-500">*</span></label>
                                <input type="number" name="phone" placeholder="Contact" class="py-2 px-2 bg-[#DBE2EF] text-sm text-blue-500  rounded">
                            </div>
                            <div class="flex flex-col gap-1">
                                <label for="" class="text-gray-600 text-sm">Organizaton <span class="text-red-500">*</span></label>
                                <input type="text" name="organization" placeholder="Organization Name" class="py-2 px-2 bg-[#DBE2EF] text-sm text-blue-500  rounded">
                            </div>
                            <div class="flex flex-col gap-1">
                                <label for="" class="text-gray-600 text-sm">Messages <span class="text-red-500">*</span></label>
                                <textarea rows="4" name="organization" placeholder="Please type More Deatails" class="py-2 px-2 bg-[#DBE2EF] text-sm text-blue-500  rounded"></textarea>
                            </div>
                            <div class="">
                                <input type="radio" required>
                                <label for="" class="text-gray-600 text-sm">I consent to Test-Track collecting and storing my data as outlined in their Privacy Policy. </label>

                            </div>
                            <div class=" flex mb-5">
                                <input type="submit" value="Submit" class="w-full bg-blue-500 text-white font-semibold py-3 rounded  text-center">

                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>

</body>

</html>