<?php
include_once "../config/connect.php";
include_once "includes/redirectIfNotAuth.php";

$callingExam = mysqli_query($connect,"select * from tests");
$counts = mysqli_num_rows($callingExam);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body>
    <?php include_once "includes/admin_header.php"; ?>
    <div class="flex">
        <div class="w-2/12 h-[88vh] flex flex-col gap-3 fixed top-15 text-xl font-semibold text-gray-700 bg-[#FFE6E6]">
            <?php include_once "includes/sidebar.php"; ?>
        </div>
        <div class="w-10/12 flex flex-col justify-center fixed top-15 right-1  p-5">
            <h1 class="text-2xl mb-2 font-semibold">Manage Exams (<?=$counts;?>)</h1>
            <div class="">
            <table class="w-full">
                <tr>
                    <th class="border border-black py-2 px-4">Id</th>
                    <th class="border border-black py-2 px-4">Title</th>
                    <th class="border border-black py-2 px-4">Subject</th>
                    <th class="border border-black py-2 px-4">Date</th>
                    <th class="border border-black py-2 px-4">Time</th>
                    <th class="border border-black py-2 px-4">Duration</th>
                    <th class="border border-black py-2 px-4">Total Marks</th>
                    <th class="border border-black py-2 px-4">Passing Marks</th>
                    <th class="border border-black py-2 px-4">Action
                    </th>
                </tr>
                <?php
                while($exams = mysqli_fetch_array($callingExam)){
                ?>

                   <tr>
                       <td class="border border-black py-2 px-4 text-center"><?= $exams['test_id'];?></td>
                       <td class="border border-black py-2 px-4 text-center"><?= $exams['test_title'];?></td>
                       <td class="border border-black py-2 px-4 text-center"><?= $exams['subject'];?></td>
                       <td class="border border-black py-2 px-4 text-center"><?= $exams['date'];?></td>
                       <td class="border border-black py-2 px-4 text-center"><?= $exams['time'];?></td>
                       <td class="border border-black py-2 px-4 text-center"><?= $exams['duration'];?></td>
                       <td class="border border-black py-2 px-4 text-center"><?= $exams['total_marks'];?></td>
                       <td class="border border-black py-2 px-4 text-center"><?= $exams['passing_marks'];?></td>
                       <td class="border border-black py-2 px-4 text-center">
                        <a href="#" class="px-2 py-1 text-sm bg-green-500 rounded font-semibold text-white ">View Details</a>
                       </td>
                   </tr>
                   <?php }?>

            </table>

        </div>
        </div>
      
    </div>
</body>
</html>