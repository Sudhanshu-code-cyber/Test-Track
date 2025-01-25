<div class="flex items-center fixed top-0 left-0 w-full  shadow-lg z-50 justify-between bg-[#F9F7F7] px-[5%] py-4 shadow-lg">
  <h1 class=" text-3xl font-bold">Test Track</h1>
  <div class=" flex justify-center items-center">
    <a href="index.php"
      class="hover:text-white text-white hover:bg-gray-900 px-4 py-2 bg-[#3F72AF] text-sm font-medium hover:text-[#FFD700] transition duration-300">Home</a>
    <a href="about.php"
      class="hover:text-white hover:bg-gray-900 px-4 py-2  text-sm font-medium hover:text-[#FFD700] transition duration-300">About</a>
    <a href="#"
      class="hover:text-white hover:bg-gray-900 px-4 py-2  text-sm font-medium hover:text-[#FFD700] transition duration-300">Contact
      Us</a>
    <a href="#"
      class="hover:text-white hover:bg-gray-900 px-4 py-2  text-sm font-medium hover:text-[#FFD700] transition duration-300">Help</a>

    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start"
      class="w-10 h-10 rounded-full cursor-pointer" src="/docs/images/people/profile-picture-5.jpg" alt="User dropdown">

    <!-- Dropdown menu -->
    <div id="userDropdown"
      class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
      <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
        <div>Bonnie Green</div>
        <div class="font-medium truncate">name@flowbite.com</div>
      </div>
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
        <li>
          <a href="#"
            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
        </li>
        <li>
          <a href="#"
            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
        </li>
        <li>
          <a href="#"
            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
        </li>
      </ul>
      <div class="py-1">
        <a href="#"
          class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
          out</a>
      </div>
    </div>

  </div>
</div>