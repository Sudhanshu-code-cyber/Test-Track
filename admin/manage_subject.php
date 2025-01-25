<?php
include_once "../config/connect.php";
$callingSubject = $connect->query("select * from subject");
$counts = mysqli_num_rows($callingSubject);
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
            <h1 class="text-2xl mb- font-semibold ml-5">Manage Subject (<?= $counts;?>)</h1>
            <div class="flex gap-2">
                <div class="w-9/12">
                    <div class="flex p-4">
                        <table class="w-full shadow">
                            <tr>
                                <th class="border-gray-200 border px-4 py-2">Id</th>
                                <th class="border-gray-200 border px-4 py-2">Subject</th>
                                <th class="border-gray-200 border px-4 py-2">Subject Description</th>
                                <th class="border-gray-200 border px-4 py-2">Action</th>
                            </tr>
                            <?php 
                            while ($row = mysqli_fetch_array($callingSubject)){
                            ?>
                                 <tr>
                                    <td class="border border-gray-200 px-4 py-2 text-center"><?= $row['subject_id'];?></td>
                                    <td class="border border-gray-200 px-4 py-2 text-center"><?= $row['subject_name'];?></td>
                                    <td class="border border-gray-200 px-4 py-2 text-center"><?= $row['subject_description'];?></td>
                                    <td class="border border-gray-200 px-4 py-2 flex justify-center">
                                        <a href="?delete_subject=<?= $row['subject_id'];?>" class="items-center"><img src="https://www.svgrepo.com/show/21045/delete-button.svg" alt="" class="h-8"> </a>
                                    </td>
                                 </tr>
                            <?php }?>
                        </table>
                    </div>
                </div>
                <div class="w-3/12">
                    <form action="manage_subject.php" method="POST" class="space-y-6 border border-gray-200 p-5 rounded shadow-md">
                    <h1 class="text-lg font-semibold">Insert Subject</h1>    
                    <!-- Subject Name -->
                        <div>
                            <label for="subjectName" class="block text-sm font-medium text-gray-700">Subject Name</label>
                            <input
                                type="text"
                                id="subjectName"
                                name="subject_name"
                                placeholder="Enter subject name"
                                class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                required>
                        </div>

                        <!-- Subject Description -->
                        <div>
                            <label for="subjectDescription" class="block text-sm font-medium text-gray-700">Subject Description</label>
                            <textarea
                                id="subjectDescription"
                                name="subject_description"
                                rows="3"
                                placeholder="Enter subject description"
                                class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                required></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button
                                type="submit"
                                name="save_subject"
                                class="w-full bg-blue-600 text-white py-3 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                Save Subject
                            </button>
                        </div>
                    </form>
                    <?php
                        if(isset($_POST['save_subject'])){
                            $subject_name = $_POST['subject_name'];
                            $subject_description = $_POST['subject_description'];

                            $query = $connect->query("insert into subject(subject_name, subject_description)
                            value('$subject_name','$subject_description')");

                            if($query){
                                msg("Subject inserted successfully");
                            }
                            else{
                                msg("Subject not inserted successfully");
                            }
                            
                            redirect("manage_subject.php");
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
if(isset($_GET['delete_subject'])){
    $id = $_GET['delete_subject'];

    $query = $connect->query("delete from subject where subject_id='$id'");
    if($query){
        redirect("manage_subject.php");
    }
    else{
        msg("something went wrong");
    }
}