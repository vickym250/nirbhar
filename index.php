<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
   
</head>

<body>
     <!-- header start-->
    <?php
        
  
     include 'header.php';
    ?>
    <!-- header close-->
       <!-- mobile menu-->
    <div class="w-[100%] bg-white flex flex-col gap-1 duration-[1s] fixed scale-0  origin-top  hide items-center">
        <div class="text-[20px] bg-[gray] w-[100%] text-center hover:bg-orange-500">
             <a href="home.php">Home</a>
        </div>
        <div class="text-[20px]  bg-[gray] w-[100%] text-center hover:bg-orange-500">
            <a href="about.php">About</a>
        </div> 
        <div class="text-[20px]  bg-[gray] w-[100%] text-center hover:bg-orange-500">
            <a href="course.php">Course</a>
        </div>
        <div class="text-[20px]  bg-[gray] w-[100%] text-center hover:bg-orange-500">
            <a href="contact.php">Contact</a>
        </div>
        <div class="text-[20px]  bg-[gray] w-[100%] text-center hover:bg-orange-500">
            <img src="./image/login.png" alt="" class="w-[20px] inline">
            <a href="Login.php">Login</a>
        </div>
        <div class="text-[20px]  bg-[gray] w-[100%] text-center hover:bg-orange-500">
            <img src="./image/profile.png" alt="" class="w-[20px] inline">
            <a href="registor.php">Register</a>
        </div>
    </div>
    <!--  mobile cloase-->
     
      <!-- banner start-->
    <section class="w-[100%]" id="banner">
        <div class="max-w-[1170px] h-500px mx-auto  flex gap-4 justify-between m-10">

            <div class="max-w-[50%] mt-4">
                <img src="./image/nir.png" alt="" class="w-[100%] mb-5" >
                <img src="./image/adca.png" alt=""  class="w-[90%]">
                 <img src="./image/mern.png" alt="" class="w-[90%]">
                 <img src="./image/exce.png" alt="" class="w-[100%] mt-[-10px]">
               <div class=" w-[100%]   gap-2 flex  md:mt-[105px] mt-10 mx-2">
                <div class=" md:w-[30%]   px-2 text-[15px]   md:px-6 py-1  bg-[#8bcaca] rounded-xl md:text-[25px]   hover:shadow-lg hover:shadow-[#9699d7] hover:bg-[#e145da]">Join Now</div>
                <div class=" md:w-[30%] px-6 py-1 bg-[#575555] rounded-xl md:text-[25px] sm:text-[13px] hover:bg-orange-500 hover:shadow-lg hover:shadow-[#bc6767]">Contact us</div>
                 </div>
               </div>
            <div class="w-[50%]">
                <img src="./image/vs.svg" alt="" >
            </div>
        </div>

    </section>

    <!-- banner - Close-->
  
       <!-- course button -->
     <div class="max-w-[1170px] mx-auto">
        <div class="flex justify-between items-center">
            <h1 class="text-[35px] font-mono font-bold">Choise your Course</h1>
             <div class="flex gap-2 md:visible invisible">
                <div class=" clleft w-[30px] h-[30px] rounded-full bg-[#e4bdbd] shadow-lg flex justify-center items-center"><i class="fa-solid fa-arrow-left cursor-pointer  " ></i></div>
                <div class=" clright w-[30px] h-[30px] rounded-full bg-[#e7d1d1] shadow-lg flex justify-center items-center"><i class="fa-solid fa-arrow-right cursor-pointer  "></i></div>
             </div>
        </div>
   
    </div>
   <!-- course close -->
       <!-- course start -->
     <div class="max-w-[1170px] mx-auto flex  overflow-hidden flex-col md:flex-row mt-2   gap-5 ">
      
         <div class="  vms transition-[2s]  basis-[24%]  shrink-0 m-8 md:m-0  bg-[#d7d7c9] shadow-lg shadow-[#706d6d] rounded-sm">
            <img src="./image/adcac.jpg" alt="" class="w-full rounded-sm">
            <div class="px-2">

                <h1 class="text-[25px]">Course: ADCA</h1>
                <h1 class="text-[20px]">Duretion: 1Year</h1>
                <h1 class="text-[20px]">Course-fees:7500 <i class="fa-solid fa-indian-rupee-sign text-[15px]"></i></h1>
                <div class="flex">
                    <h1 class="text-[20px]">Rating : </h1>
                    <div class="w-[50px] flex">
                        <img src="./image/star.png" alt="" class="w-[22px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                    </div>
                </div>
                <button class="w-[80%] mx-8 md:mx-3 text-center mb-2 mt-2 bg-slate-500 shadow-lg text-[20px] rounded-md hover:bg-[#800075]">buy Now</button>
            </div>

         </div>
         <div class="  vms transition-[2s]  basis-[24%]  shrink-0 m-8 md:m-0  bg-[#d7d7c9] shadow-lg shadow-[#706d6d] rounded-sm">
            <img src="./image/adcac.jpg" alt="" class="w-full rounded-sm">
            <div class="px-2">

                <h1 class="text-[25px]">Course: ADCA</h1>
                <h1 class="text-[20px]">Duretion: 1Year</h1>
                <h1 class="text-[20px]">Course-fees:7500 <i class="fa-solid fa-indian-rupee-sign text-[15px]"></i></h1>
                <div class="flex">
                    <h1 class="text-[20px]">Rating : </h1>
                    <div class="w-[50px] flex">
                        <img src="./image/star.png" alt="" class="w-[22px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                    </div>
                </div>
                <button class="w-[80%] mx-8 md:mx-3 text-center mb-2 mt-2 bg-slate-500 shadow-lg text-[20px] rounded-md hover:bg-[#800075]">buy Now</button>
            </div>

         </div>
         <div class="  vms transition-[2s]  basis-[24%]  shrink-0 m-8 md:m-0  bg-[#d7d7c9] shadow-lg shadow-[#706d6d] rounded-sm">
            <img src="./image/adcac.jpg" alt="" class="w-full rounded-sm">
            <div class="px-2">

                <h1 class="text-[25px]">Course: ADCA</h1>
                <h1 class="text-[20px]">Duretion: 1Year</h1>
                <h1 class="text-[20px]">Course-fees:7500 <i class="fa-solid fa-indian-rupee-sign text-[15px]"></i></h1>
                <div class="flex">
                    <h1 class="text-[20px]">Rating : </h1>
                    <div class="w-[50px] flex">
                        <img src="./image/star.png" alt="" class="w-[22px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                    </div>
                </div>
                <button class="w-[80%] mx-8 md:mx-3 text-center mb-2 mt-2 bg-slate-500 shadow-lg text-[20px] rounded-md hover:bg-[#800075]">buy Now</button>
            </div>

         </div>
         <div class="  vms transition-[2s]  basis-[24%]  shrink-0 m-8 md:m-0  bg-[#d7d7c9] shadow-lg shadow-[#706d6d] rounded-sm">
            <img src="./image/adcac.jpg" alt="" class="w-full rounded-sm">
            <div class="px-2">

                <h1 class="text-[25px]">Course: ADCA</h1>
                <h1 class="text-[20px]">Duretion: 1Year</h1>
                <h1 class="text-[20px]">Course-fees:7500 <i class="fa-solid fa-indian-rupee-sign text-[15px]"></i></h1>
                <div class="flex">
                    <h1 class="text-[20px]">Rating : </h1>
                    <div class="w-[50px] flex">
                        <img src="./image/star.png" alt="" class="w-[22px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                    </div>
                </div>
                <button class="w-[80%] mx-8 md:mx-3 text-center mb-2 mt-2 bg-slate-500 shadow-lg text-[20px] rounded-md hover:bg-[#800075]">buy Now</button>
            </div>

         </div>
         <div class="  vms transition-[2s]  basis-[24%]  shrink-0 m-8 md:m-0  bg-[#d7d7c9] shadow-lg shadow-[#706d6d] rounded-sm">
            <img src="./image/adcac.jpg" alt="" class="w-full rounded-sm">
            <div class="px-2">

                <h1 class="text-[25px]">Course: ADCA</h1>
                <h1 class="text-[20px]">Duretion: 1Year</h1>
                <h1 class="text-[20px]">Course-fees:7500 <i class="fa-solid fa-indian-rupee-sign text-[15px]"></i></h1>
                <div class="flex">
                    <h1 class="text-[20px]">Rating : </h1>
                    <div class="w-[50px] flex">
                        <img src="./image/star.png" alt="" class="w-[22px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                    </div>
                </div>
                <button class="w-[80%] mx-8 md:mx-3 text-center mb-2 mt-2 bg-slate-500 shadow-lg text-[20px] rounded-md hover:bg-[#800075]">buy Now</button>
            </div>

         </div>
         <div class="  vms transition-[2s]  basis-[24%]  shrink-0 m-8 md:m-0  bg-[#d7d7c9] shadow-lg shadow-[#706d6d] rounded-sm">
            <img src="./image/adcac.jpg" alt="" class="w-full rounded-sm">
            <div class="px-2">

                <h1 class="text-[25px]">Course: ADCA</h1>
                <h1 class="text-[20px]">Duretion: 1Year</h1>
                <h1 class="text-[20px]">Course-fees:7500 <i class="fa-solid fa-indian-rupee-sign text-[15px]"></i></h1>
                <div class="flex">
                    <h1 class="text-[20px]">Rating : </h1>
                    <div class="w-[50px] flex">
                        <img src="./image/star.png" alt="" class="w-[22px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                    </div>
                </div>
                <button class="w-[80%] mx-8 md:mx-3 text-center mb-2 mt-2 bg-slate-500 shadow-lg text-[20px] rounded-md hover:bg-[#800075]">buy Now</button>
            </div>

         </div>
         <div class="  vms transition-[2s]  basis-[24%]  shrink-0 m-8 md:m-0  bg-[#d7d7c9] shadow-lg shadow-[#706d6d] rounded-sm">
            <img src="./image/adcac.jpg" alt="" class="w-full rounded-sm">
            <div class="px-2">

                <h1 class="text-[25px]">Course: ADCA</h1>
                <h1 class="text-[20px]">Duretion: 1Year</h1>
                <h1 class="text-[20px]">Course-fees:7500 <i class="fa-solid fa-indian-rupee-sign text-[15px]"></i></h1>
                <div class="flex">
                    <h1 class="text-[20px]">Rating : </h1>
                    <div class="w-[50px] flex">
                        <img src="./image/star.png" alt="" class="w-[22px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                    </div>
                </div>
                <button class="w-[80%] mx-8 md:mx-3 text-center mb-2 mt-2 bg-slate-500 shadow-lg text-[20px] rounded-md hover:bg-[#800075]">buy Now</button>
            </div>

         </div>
         <div class="  vms transition-[2s]  basis-[24%]  shrink-0 m-8 md:m-0  bg-[#d7d7c9] shadow-lg shadow-[#706d6d] rounded-sm">
            <img src="./image/adcac.jpg" alt="" class="w-full rounded-sm">
            <div class="px-2">

                <h1 class="text-[25px]">Course: ADCA</h1>
                <h1 class="text-[20px]">Duretion: 1Year</h1>
                <h1 class="text-[20px]">Course-fees:7500 <i class="fa-solid fa-indian-rupee-sign text-[15px]"></i></h1>
                <div class="flex">
                    <h1 class="text-[20px]">Rating : </h1>
                    <div class="w-[50px] flex">
                        <img src="./image/star.png" alt="" class="w-[22px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                        <img src="./image/star.png" alt="" class="w-[20px]">
                    </div>
                </div>
                <button class="w-[80%] mx-8 md:mx-3 text-center mb-2 mt-2 bg-slate-500 shadow-lg text-[20px] rounded-md hover:bg-[#800075]">buy Now</button>
            </div>

         </div>
      
        
    </div>
   <!-- course close -->

      <!-- teacher start -->
         <div class="max-w-[1170px] font-semibold mx-auto text-[35px] mt-5"> Popular Teacher </div>
        <div class="max-w-[1170px] mx-auto flex gap-3 md:flex-row  flex-col mt-10 ">
            <div class="   transition-[2s]  basis-[24%]   shrink-0 m-8 md:m-0  bg-[#d7d7c9] shadow-lg shadow-[#706d6d] rounded-sm">
                <div class="w-[100%] flex justify-center ">

                    <img src="./image/teacher.png" alt="" class="w-[200px] h-[200px] rounded-full">
                </div>
                <div class="px-2">
    
                    <h1 class="text-[20px]">Name:vicky Maurya </h1>
                    <h1 class="text-[20px]">Course: I am MERN stack devloper</h1>
                    <h1 class="text-[20px]"> Experince : 1-2 YEAR</h1>
                  <div class="flex">
                        <h1 class="text-[20px]">Rating : </h1>
                        <div class="w-[50px] flex">
                            <img src="./image/star.png" alt="" class="w-[22px]">
                            <img src="./image/star.png" alt="" class="w-[20px]">
                            <img src="./image/star.png" alt="" class="w-[20px]">
                            <img src="./image/star.png" alt="" class="w-[20px]">
                        </div>
                    </div>
   
                 <button class="w-[80%] mx-8 md:mx-3 text-center mb-2 mt-2 bg-slate-500 shadow-lg text-[20px] rounded-md hover:bg-[#800075]">Contact us</button>
                </div>
    
             </div>
            <div class="   transition-[2s]  basis-[24%]   shrink-0 m-8 md:m-0  bg-[#d7d7c9] shadow-lg shadow-[#706d6d] rounded-sm">
                <div class="w-[100%] flex justify-center ">

                    <img src="./image/teacher.png" alt="" class="w-[200px] h-[200px] rounded-full">
                </div>
                <div class="px-2">
    
                    <h1 class="text-[20px]">Name:vicky Maurya </h1>
                    <h1 class="text-[20px]">Course: I am MERN stack devloper</h1>
                    <h1 class="text-[20px]"> Experince : 1-2 YEAR</h1>
                  <div class="flex">
                        <h1 class="text-[20px]">Rating : </h1>
                        <div class="w-[50px] flex">
                            <img src="./image/star.png" alt="" class="w-[22px]">
                            <img src="./image/star.png" alt="" class="w-[20px]">
                            <img src="./image/star.png" alt="" class="w-[20px]">
                            <img src="./image/star.png" alt="" class="w-[20px]">
                        </div>
                    </div>
   
                 <button class="w-[80%] mx-8 md:mx-3 text-center mb-2 mt-2 bg-slate-500 shadow-lg text-[20px] rounded-md hover:bg-[#800075]">Contact us</button>
                </div>
    
             </div>
            <div class="  transition-[2s]  basis-[24%]   shrink-0 m-8 md:m-0  bg-[#d7d7c9] shadow-lg shadow-[#706d6d] rounded-sm">
                <div class="w-[100%] flex justify-center ">

                    <img src="./image/teacher.png" alt="" class="w-[200px] h-[200px] rounded-full">
                </div>
                <div class="px-2">
    
                    <h1 class="text-[20px]">Name:vicky Maurya </h1>
                    <h1 class="text-[20px]">Course: I am MERN stack devloper</h1>
                    <h1 class="text-[20px]"> Experince : 1-2 YEAR</h1>
                  <div class="flex">
                        <h1 class="text-[20px]">Rating : </h1>
                        <div class="w-[50px] flex">
                            <img src="./image/star.png" alt="" class="w-[22px]">
                            <img src="./image/star.png" alt="" class="w-[20px]">
                            <img src="./image/star.png" alt="" class="w-[20px]">
                            <img src="./image/star.png" alt="" class="w-[20px]">
                        </div>
                    </div>
   
                 <button class="w-[80%] mx-8 md:mx-3 text-center mb-2 mt-2 bg-slate-500 shadow-lg text-[20px] rounded-md hover:bg-[#800075]">Contact us</button>
                </div>
    
             </div>
            <div class="  transition-[2s]  basis-[24%]   shrink-0 m-8 md:m-0  bg-[#d7d7c9] shadow-lg shadow-[#706d6d] rounded-sm">
                <div class="w-[100%] flex justify-center ">

                    <img src="./image/teacher.png" alt="" class="w-[200px] h-[200px] rounded-full">
                </div>
                <div class="px-2">
    
                    <h1 class="text-[20px]">Name:vicky Maurya </h1>
                    <h1 class="text-[20px]">Course: I am MERN stack devloper</h1>
                    <h1 class="text-[20px]"> Experince : 1-2 YEAR</h1>
                  <div class="flex">
                        <h1 class="text-[20px]">Rating : </h1>
                        <div class="w-[50px] flex">
                            <img src="./image/star.png" alt="" class="w-[22px]">
                            <img src="./image/star.png" alt="" class="w-[20px]">
                            <img src="./image/star.png" alt="" class="w-[20px]">
                            <img src="./image/star.png" alt="" class="w-[20px]">
                        </div>
                    </div>
   
                 <button class="w-[80%] mx-8 md:mx-3 text-center mb-2 mt-2 bg-slate-500 shadow-lg text-[20px] rounded-md hover:bg-[#800075]">Contact us</button>
                </div>
    
             </div>
            
  
        </div>

   <!-- teacher close -->
       <!-- about start-->
        <div class="max-w-[1170px] font-bold text-[35px] mx-auto mt-5"> About us</div>
  <section class="max-w-[1170px] flex-col md:flex-row flex gap-2 mx-auto mt-10 ">
  
    <div class="basis-[49%]">
        <img src="./image/sv.png" alt="" class="w-[100%]">
    </div>

    <div class="basis-[49%] m-5 md:m-0">
        <h1 class="text-[30px] text-[#312a2a]">Welcome to Nirbhar Academy </h1>
        <p class="text-[20px] text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ipsum
             id enim deleniti, dolor consequuntur maxime labore molestias, aut quod aliquid impedit deserun
            t quis. Facilis minus dolorum maiores aperiam incidunt!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ipsum
             id enim deleniti, dolor consequuntur maxime labore molestias, aut quod aliquid impedit deserun
            t quis. Facilis minus dolorum maiores aperiam incidunt!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ipsum
             
        </p>
      
        <button class="bg-[gray] shadow-lg text-[25px] rounded-lg px-5 mt-10 hover:bg-red-700">About Us</button>
    </div>


  </section>
  <div class="w-100% h-[2px] mt-4"> <img src="./image/footer_border.jpg" alt="" class="w-full"></div>
  <footer class="w-full  back">
  <div class="max-w-[1000px] mx-auto py-20 flex justify-between">
    <div class="max-w-[33%] hidden md:block">
        <h1 class="text-[20px] font-bold">Quick Links</h1>
        <ul class="list-disc text-[blue]">
            <li>Home</li>
            <li>Contact</li>
            <li>service</li>
            <li>course</li>
            <li>About</li>
         
        </ul>
    </div>
    <div class="max-w-[50%]  m-2 md:m-0  md:max-w-[33%]">
        <h1 class="text-[20px] font-bold">Service</h1>
        <ul type="disc"  class=" text-[blue] list-disc text-[10px] md:text-[15px]">
            <li>Website Designing And Developmen</li>

  <li>Outsource Solutions</li>
<li>Domain Registratio</li>
<li>Search Engine Optimizatio</li>
 <li>Ecommerce Solutions</li>
  <li>Web Hosting</li>
   <li>Mobile Application Development
Psd To Htm</li>
         
        </ul>
    </div>
    <div class="max-w-[50%] m-2 md:m-0 md:max-w-[33%]">
        <h1 class="text-[20px] font-bold">Location</h1>
        <div class="text-[#2ba7e4 text-right  text-[blue]  text-[10px] md:text-[15px]">
        <p>Mannijot chauraha  Bhanvapur road 272189 </p>   
           <p> Phone : +91-9984745195</p>
            <p>+91-9984741360</p>
            <p>Email us : nirbharacademy@gmail.com</p>
           <p> Web Hosting</p>
            <p>Website URl</p>
            <p>http://scrumtechnologies.in/</p>
        </div>
    </div>


  </div>
 
  </footer>

   <!--About close-->
</body>

<script>
let v = document.querySelectorAll(".vms")
let vs = document.querySelectorAll(".vs")
let left = document.querySelector('.clleft')
let right = document.querySelector('.clright')
let close = document.querySelector('.close')

let nu = 0 
 
 right.addEventListener("click" , ()=>{

   left.style.visibility = "visible";
    
       if(nu == v.length -4){
        
        right.style.visibility = "hidden";
        return false;
       }
       
       
     let vn = nu+=1
     for (let i = 0; i < v.length; i++) {
       v[i].style.transform = `translateX(-${vn * 300}px)`
   }
     
     
   })    
 left.addEventListener("click" , ()=>{
   right.style.visibility = "visible";
     if(nu== 0){
       left.style.visibility = "hidden";
     }
     let vn = nu-=1
     for (let i = 0; i < v.length; i++) {
       v[i].style.transform = `translateX(-${vn * 300}px)`
   }
     
    
   })    
</script>


</html>