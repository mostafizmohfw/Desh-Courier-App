<x-app-layout>
   <div class="dashboard-bg py-7 pl-7 pr-4 w-full flex gap-5">
      <div class="dc-user-box">
         <div class="flex items-center px-7">
            <div class="flex gap-4 py-5 items-center">
               <div class="bg-center bg-contain bg-no-repeat rounded-full">
                  <img class="profile_image" src="{{ asset('assets/img/profile.png') }}" alt="Ratul Ahmed">
               </div>
               <div>
                  <a href="{{ route('profile') }}">
                     <h4 class="text-2xl font-medium text-gray-900">Ratul Ahmed</h4>
                  </a>
                  <span class="text-lg text-gray-300">Admin</span>
               </div>
            </div>
            <div class="w-1/2 flex justify-end">
               <a href="#" class="bg-blue-600 py-2 px-3 text-white items-center">
                  Edit Profile
               </a>
            </div>
         </div>
         <hr class="bg-gray-500">
         <div class="px-7">
            <div class="flex my-10 items-center gap-10">
               <div class="w-1/2">
                  <p class="dc-user-title">First Name</p>
                  <h2 class="dc-user-text">Ratul</h2>
               </div>
               <div class="w-1/2">
                  <p class="dc-user-title">Last Name</p>
                  <h2 class="dc-user-text">Ahmed</h2>
               </div>
            </div>
            <div class="flex my-10 items-center gap-10">
               <div class="w-1/2">
                  <p class="dc-user-title">Date of Birth</p>
                  <h2 class="dc-user-text">01-15-1989</h2>
               </div>
               <div class="w-1/2">
                  <p class="dc-user-title">Date of Joining</p>
                  <h2 class="dc-user-text">01-06-2019</h2>
               </div>
            </div>

            <div class="flex my-10 items-center gap-10">
               <div class="w-1/2">
                  <p class="dc-user-title">Mobile</p>
                  <h2 class="dc-user-text">01712215235</h2>
               </div>
               <div class="w-1/2">
                  <p class="dc-user-title">Email Address</p>
                  <h2 class="dc-user-text ">mostafiz.hsd@gmail.com</h2>
               </div>
            </div>

            <div class="flex my-10 items-center gap-10">
               <div class="w-1/2">
                  <p class="dc-user-title">NID Card Number</p>
                  <h2 class="dc-user-text">7848780459</h2>
               </div>
               <div class="w-1/2">
                  <p class="dc-user-title">Profile ID Number</p>
                  <h2 class="dc-user-text ">124578854</h2>
               </div>
            </div>

            <div class="flex my-10 items-center gap-10">
               <div class="w-1/2">
                  <p class="dc-user-title">Address</p>
                  <h2 class="dc-user-text">Azimpur, Dhaka</h2>
               </div>
               <div class="w-1/2">
                  <p class="dc-user-title">Hub</p>
                  <h2 class="dc-user-text ">Uttara</h2>
               </div>
            </div>
            <div class="flex w-full justify-center p-6 border border-slate-500 uppercase">
               <a class="text-center text-blue-600 font-semibold" href=""> SEE All Details</a>
            </div>
         </div>
      </div>
      <div>
         <div class="dc-weeky-box">
            <div class="flex py-6 px-8 gap-3">
               <div class="w-1/2 text-xl font-bold">Weekly Transaction Summary</div>
               <div class="flex w-1/2 items-center min-w-max bg-white justify-end">
                  <span class="flex border border-gray-200 space-x-1 items-center p-4 rounded">
                     <h2 class="mr-2">Last 12 Months</h2>
                     <img src="{{ asset('assets/img/Iconly/Light/mcalendar.svg') }}" alt="">
                  </span>
               </div>
            </div>
         </div>
         <div class="dc-transation-box mt-7">
            <div class="flex py-6 items-center px-8 gap-3 border-b-gray-200 border-b">
               <div class="w-1/2 text-xl font-bold">Recent Activities</div>
               <div class="flex w-1/2 items-center min-w-max bg-white justify-end">
                  <span class="flex border border-gray-200 space-x-1 items-center p-4 rounded">
                     <h2 class="mr-2">Last 7 Days</h2>
                     <img src="{{ asset('assets/img/Iconly/Light/mcalendar.svg') }}" alt="">
                  </span>
               </div>
            </div>
            <div class="flex">
               <ul class="pl-10 pt-2">
                  <li class="flex items-center gap-2 py-4 pl-3">
                     <img class="w-8 bg-primary-color p-2 rounded-full" src="{{ asset('assets/img/Iconly/Light/timecircle.svg') }}"/> 
                     <p class="text-base">Order #3256857 Got <span class="font-semibold">Cancelled</span></p>
                  </li>
                  <li class="flex items-center gap-2 pb-4 pl-3">
                     <img class="w-8 bg-primary-color p-2 rounded-full" src="{{ asset('assets/img/Iconly/Light/timecircle.svg') }}"/> 
                     <p><span class="font-semibold">Shakline Mostak</span> added as a Delivery Man ID#7641356</p>
                  </li>
                  <li class="flex items-center gap-2 pb-4"> 
                     <span class="primary-color bg-primary-color px-2 py-1 rounded font-semibold">14 more</span>
                  </li>
                  <li class="flex items-center gap-2 pb-4 pl-3">
                     <img class="w-8 bg-primary-color p-2 rounded-full" src="{{ asset('assets/img/Iconly/Light/timecircle.svg') }}"/> 
                     <p>Order #3256857 Got <span class="font-semibold">Delivered</span></p>
                  </li>
                  <li class="flex items-center gap-2 pb-4 pl-3">
                     <img class="w-8 bg-primary-color p-2 rounded-full" src="{{ asset('assets/img/Iconly/Light/timecircle.svg') }}"/> 
                     <p>Order #3256857 Got <span class="font-semibold">Pending</span></p>
                  </li>
                  <li class="flex items-center gap-2 pb-4">
                     <a href="#" class="bg-blue-600 py-2 px-4 text-white items-center">
                     View All Activity
                  </a>
                  </li>
                  
               </ul>
               
            </div>
         </div>
      </div>
   </div>
</x-app-layout>