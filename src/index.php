<?php
require('upload.php');
session_start();
?>

<?php



?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JessevanDriel</title>
    <link rel="stylesheet" href=" ../dist/output.css ">
    <link rel="stylesheet" href="../src/css/index.css">
</head>
<body onload="slideIn()"  class="font-medium ">

<div class="flex justify-end">
  <div class=" absolute mt-[40px]">
    <div class="w-[calc(1050px+2rem)] h-[100%] bg-slate-100 border-l-[250px] border-b-[1025px] border-l-white border-b-transparent -z-10 relative "></div>
  </div>
</div>

  <main class="z-20">
    <nav class="bg-black">
      <div class="absolute">
        <a class="bg-white inline-block border-l border-t border-r rounded-t ml-20 px-10 py-2 text-blue-700  hover:text-blue-500 duration-500 font-semibold" href="#">Jesse van Driel</a>
      </div>
      <ul class="flex border-b justify-end">
        <li class="-mb-px mr-1">
          <a class="bg-slate-100 inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700  hover:text-blue-600 duration-500 font-semibold" href="#">About me</a>
        </li>
        
        <li class="mr-1">
          <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 duration-500 font-semibold" href="#mywork">My Work</a>
        </li>
        <li class="mr-1">
          <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 duration-500 font-semibold" href="#contact">Contact</a>
        </li>
       
      </ul>
    </nav>

    <div class="grid grid-cols-2 h-[900px] ">
      <!-- linker kant -->
      <div class="my-96 mx-96 w-50 absolute h-[24vh] hidden animation2">
        <div class="hover:skew-y-3 transition duration-700">
          <div>
            <p class="text-5xl text-black">I'm Jesse,</p>
            <p class="text-5xl text-black border-b-2">A Software Developer</p>
          </div>
          <div class="text-white drop-shadow-2xl" id="shadow">
            <p class="text-5xl">I'm Jesse,</p>
            <p class="text-5xl">A Frontend Developer</p>
          </div>
        </div>
          <div>
              <a class="border-2 border-gray-400 text-blue-500 my-4 rounded-full pt-1 pb-1 pl-1.5 pr-1.5 hover:scale-x-110 transition duration-1000 bottom-0 absolute font-bold" href="#contact">Contact me</a>
          </div>
      </div>
    
      
      
    <!-- rechter kant -->
        <div class="z-20 w-72 mt-80 ml-[140vh]">
          <img id="profileimg" class=" rounded-full duration-700 transition hover:scale-105" src="img/blank-profile-picture-973460_1280.webp" alt="ProfilePicture">
        </div> 
    </div>

    <div class="h-[200px] w-[100%] bg-slate-100"></div>
    <div class="text-center bg-slate-100 mb-20">
      <div class="h-40">
        <div class="text-center items-center hover:scale-105 transition duration-700">
          <center>
            <div class=" text-5xl text-blue-700 w-6/12">Who am I?</div>
            <div class="text-xl w-6/12">Hello, I'm Jesse, a Software Developer who is currently studying at Grafisch Lyceum Rotterdam in the Netherlands. My passion lies in programming, with a particular focus on frontend development, and I also have some experience in backend development.</div>
          </center>
        </div>
      </div>
        <center>
          <hr class="border-b-2 border-blue-700 w-6/12 mt-10">
          <div class="bg-slate-100 mb-10 w-100vw h-10"></div>
        </center>
      <div>
        <p></p>
      </div>
    </div>
        <!-- linker kant -->

  <div id="mywork">
    <div class="w-100vw text-center">
      <p class="mt-24 text-5xl text-blue-700">My work</p>
    </div>
  </div>
    <div class="ml-[150px] mr-[150px] grid grid-cols-2 text-center mb-32 mt-32">
      
      <?php
      
    $listSql = "SELECT ID, title, image FROM fileup";
    $listResult = mysqli_query($conn, $listSql);

    if ($listResult && mysqli_num_rows($listResult) > 0) {

      $i = 0;

        while ($row = mysqli_fetch_assoc($listResult)) {
            $fileId = $row['ID'];
            $title = $row['title'];
            $imagePath = 'img/' . $row['image'];
            ?>
            <div>
              <center>
                <img class=" projectimg hover:scale-105 transition duration-700" src="<?= $imagePath ?>" alt="">
                <div class="mb-10 text-xl font-bold " ><?= $title ?></div>
              </center>
           </div>
            <?php
            $i++;
          }
      } else {
          echo "  No files found.";
          
      }
            ?>
    </div>
    <center>
      <div class="bg-white p-8 rounded-lg shadow-xl w-96 text-lg font-bold border-black mb-24 ">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="title" class="block mb-1">Title</label>
                <input  type="text" name="title" id="title" maxlength="30"  class="w-full px-3 py-2 border rounded-lg">
            </div>
            <label for="file" class="block mb-1 ">File Upload</label>

            <div class="mb-4 border rounded-lg">
                <input type="file" name="file" id="file" class="w-full px-3 py-2 ml-10">
            </div>
            <div>
                <button type="submit" name="submit" class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
            </div>
        </form>
      </div>
      
    </center>

    <center><hr class="border-b-2 border-blue-700 w-6/12 mt-10"></center>
    <center>
      <div class="mt-16 mb-14 text-blue-700 text-5xl"  >Contact Me</div>
    </center>
    <div class="flex items-center justify-center p-12" id="contact">
      <div class="mx-auto w-full max-w-[550px]">
        <form method="post" action="mail.php">
          <div class="mb-5">
            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]"> Full Name</label>
            <input type="text" name="name" id="name" placeholder="Full Name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-700 focus:shadow-md"/>
          </div>
          <div class="mb-5">
            <label  for="email" class="mb-3 block text-base font-medium text-[#07074D]">Email Address</label>
            <input type="email" name="email" id="email" placeholder="example@gmail.com" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-700 focus:shadow-md"/>
          </div>
          <div class="mb-5">
            <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">Subject</label>
            <input type="text" name="subject" id="subject" placeholder="Enter your subject" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-700 focus:shadow-md"/>
          </div>
          <div class="mb-5">
            <label for="message" class="mb-3 block text-base font-medium text-[#07074D]">Message </label>
            <textarea rows="4" name="message" id="message" placeholder="Type your message" class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-700 focus:shadow-md"></textarea>
          </div>
          <center>
            <div>
              <button class="hover:shadow-form rounded-md bg-blue-700 hover:bg-blue-600 py-3 px-8 text-base font-semibold text-white outline-none">Submit</button>
            </div>
          </center>
       
        </form>
      </div>
    </div>
  
      <footer class=" bg-slate-100 flex flex-col justify-center items-center h-[60px] border-t border-blue-700" id="footer">
        <div>
          <center><div><p class="w-[300px] ">Jesse van Driel</p></div></center> 
          <center><div><p class="w-[300px] ">Copyright © 2023. All rights reserved.</p></div></center> 
        </div>
      </footer>
  
 

  </main>
  <script src="js/js.js"></script>
</body>

</html>