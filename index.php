<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
    <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script src="https://kit.fontawesome.com/c5d3f2b03a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="responsive.css">
  </head>
<body id="body" class="bg-[url(background.jpg)] gap-10 bg-cover h-screen flex flex-row justify-center items-center">
<div id="social-container" class="bg-white flex flex-col gap-3 border-gray-600/30 items-center justify-center   bg-opacity-40 w-[auto] border-2 h-[auto] p-10 rounded-lg">
<a href=""><span class="h-[50px] w-[50px] flex items-center justify-center bg-blue-500 rounded-full opacity-100 hover:z-1 hover:scale-[1.1] duration-300 ease-in-out"><i class="fa-brands text-3xl text-white fa-facebook"></i></span></a>
<a href=""><span class="h-[50px] w-[50px] flex items-center justify-center bg-purple-600 rounded-full opacity-100 hover:z-1 hover:scale-[1.1] duration-300 ease-in-out"><i class="text-3xl text-white fa-brands fa-instagram"></i></span></a>
<a href=""><span class="h-[50px] w-[50px] flex items-center justify-center bg-blue-800 rounded-full opacity-100 hover:z-1 hover:scale-[1.1] duration-300 ease-in-out"><i class="fa-brands text-3xl text-white fa-behance"></i></span></a>
<a href=""><span class="h-[50px] w-[50px] flex items-center justify-center bg-blue-600 rounded-full opacity-100 hover:z-1 hover:scale-[1.1] duration-300 ease-in-out"><i class=" text-3xl text-white fa-brands fa-discord"></i></span></a>

</div> 
<div id="container" class="bg-white flex justify-center  bg-opacity-40 w-[50%] border-2 border-opacity-30 border-gray-600/30 h-[27rem] rounded-lg">
<div class="flex flex-col gap-3 items-center  mt-3">
  <img draggable="false" class="flex  w-[100px] border-2 border-red-600/30 h-[100px] rounded-full flex" src="logo.jpeg" alt="Logo">
 <div class="flex itemscenter flex-col">
 <h1 class="justify-center text-[1rem] font-black text-red-600 flex">username</h1>
 <h1 class="justify-center text-[1rem] font-bold text-black flex">web development</h1>
 <h1 class="justify-center text-[1rem] font-bold text-black bg-white p-2 mt-3 bg-opacity-40 rounded-md flex border-2 border-red-600/30">Tecrübeler</h1>
 </div>
<div id="tecrubeler-container" class="items-center felx-row gap-3 flex justify-center">
  <div id="tecrubeler" class="flex flex-col gap-1">
    <div class="flex flex-row items-center gap-2 border-2 bg-opacity-40 rounded-md p-2  bg-white border-red-600/30"><i class="fa-brands fa-react"></i>React JS</div>
    <div class="flex flex-row items-center gap-2 border-2 bg-opacity-40 rounded-md p-2  bg-white border-red-600/30"><i class="fa-brands fa-react"></i>Next JS</div>
  </div>
  <div id="tecrubeler" class="flex flex-col gap-1">
    <div class="flex flex-row items-center gap-2 border-2 bg-opacity-40 rounded-md p-2  bg-white border-red-600/30"><i class="fa-brands fa-react"></i>Vue JS</div>
    <div class="flex flex-row items-center gap-2 border-2 bg-opacity-40 rounded-md p-2  bg-white border-red-600/30"><i class="fa-brands fa-php"></i>PHP</div>
  </div>
  <div id="tecrubeler" class="flex flex-col gap-1">
    <div class="flex flex-row items-center gap-2 border-2 bg-opacity-40 rounded-md p-2  bg-white border-red-600/30"><i class="fa-brands fa-html5"></i>HTML</div>
    <div class="flex flex-row items-center gap-2 border-2 bg-opacity-40 rounded-md p-2  bg-white border-red-600/30"><i class="fa-brands fa-css3-alt"></i>CSS</div>
  </div>
</div>
<div>
  <button id="darkmode" onclick="darkmode()" class="bg-black/30 p-2 w-[50px] h-[50px] rounded-full"><i class="fa-solid text-black fa-circle-half-stroke"></i></button>
  <button id="lightmode" onclick="lightmode()" class="hidden bg-black/30 p-2 w-[50px] h-[50px] rounded-full"><i class="fa-solid text-black fa-circle-half-stroke"></i></button>

</div>
</div>
   </div> 

   <script src="dark-light-mode.js"></script>
</body>
</html>