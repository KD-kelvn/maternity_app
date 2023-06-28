<x-layout>
    <div class="page-wrapper w-[96%] md:w-[88%] px-2 py-2 relative">
       <div class="profile flex items-center w-full mb-10">
              <div class="profile-img w-[20%] h-[20%] max-h-[20%]">
                <img src="{{asset('images/user_default.png')}}" class="w-full h-full rounded-full" alt="">
              </div>
              <div class="profile-info ml-2">
                <h1 class="text-2xl font-bold">Dr. Joice Ndarichako</h1>
                <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p class="hospital">
                    <span class="text-gray-500 text-sm">Hospital:</span>
                    <span class="text-gray-700 text-sm">Muhimbili Hospital</span>
                </p>
              </div>
       </div>

       <div class="profession-info-card relative mt-4  p-2">
          <div class="info-header border-[1px] border-gray-300 rounded w-max px-2">
            <h1 class="text-xl font-semibold">Profession</h1>
          </div>

          <div class="desc shadow rounded p-2 flex flex-col gap-3">
           <p>1: Mental therapy </p>
           <p>2: Uzazi wa mpango</p>
          </div>
       </div>

       <div class="clients-reviews mt-10">
            <div class="info-header border-[1px] border-gray-300 rounded mt-4 w-max px-2">
                <h1 class="text-xl font-semibold">Clients Reviews</h1>
            </div>
    
            <div class="reviews shadow rounded mt-2">
                <div class="review-card p-2 border-b-2">
                    <div class="review-header flex ">
                        <div class="reviewer-img w-[5%] h-[5%] max-h-[5%]">
                        <img src="{{asset('images/user_default.png')}}" class="w-full h-full rounded-full" alt="">
                        </div>
                        <div class="reviewer-info ml-2">
                        <h1 class="text-sm">Dr. Joice Ndarichako</h1>
                        <div class="time">
                            <span class="text-gray-500 text-sm">Reviewed 2 days ago</span>
                        </div>
                        </div>
                    </div>
    
                    <div class="review-body mt-2 text-sm">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae velit quam, nihil officiis hic atque quia magnam aut corrupti sed rerum, minus unde culpa temporibus nemo obcaecati sunt cum est.</p>
                    </div>
                </div>
                <div class="review-card p-2 border-b-2">
                    <div class="review-header flex ">
                        <div class="reviewer-img w-[5%] h-[5%] max-h-[5%]">
                        <img src="{{asset('images/user_default.png')}}" class="w-full h-full rounded-full" alt="">
                        </div>
                        <div class="reviewer-info ml-2">
                        <h1 class="text-sm">Dr. Joice Ndarichako</h1>
                        <div class="time">
                            <span class="text-gray-500 text-sm">Reviewed 2 days ago</span>
                        </div>
                        </div>
                    </div>
    
                    <div class="review-body mt-2 text-sm">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae velit quam, nihil officiis hic atque quia magnam aut corrupti sed rerum, minus unde culpa temporibus nemo obcaecati sunt cum est.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="make-appointment-section mt-10">
            <a href="/users/appointments/create" class="bg-transparent  hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
               Make appointment
              </a>
        </div>
    </div>
</x-layout>