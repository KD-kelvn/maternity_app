<x-doctor.layout>
    <div class="top-contents">
        <h2 class="text-2xl font-semibold">Dashboard</h2>
        <div class="hero-img w-[88%] rounded-md overflow-hidden mt-2 relative">
          <img src="/images/doctor/b8.jpg" alt="" class="w-full h-full">
          <div class="welcome-text-container absolute ml-6 flex flex-col gap-3 w-[80%] top-[3rem]">
            <h3 class="text-lg ">Welcome</h3>
            <h2 class="text-2xl font-semibold"> Test Doctor.</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi libero expedita ipsa soluta ea sapiente accusantium aut recusandae odit quidem. Minus, vitae nisi.</p>

            <button type="button" class="text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 mt-2 mr-2 mb-2 w-max">
          
                <a href="/doctors/appointments/view">View appointments</a>
              </button>
          </div>
        </div>
    </div>
    <div class="status-wrapper mt-8 mb-8">
      <h2 class="text-2xl">Status</h2>

      <div class="cards-wrapper mt-2 grid grid-cols-3 gap-3">
         @php
              $appointments = [
                'total'=>2,
                'title'=>'New Appointments',
                'icon'=> "fa-solid fa-calendar-check",
      ];
      $patients = [
        'total'=>4,
        'title'=>'Patients',
        'icon'=> "fa-solid fa-hospital-user",
      ];
      $prescriptions = [
        'total'=>4,
        'title'=>'All appointments',
        'icon'=> "fa-solid fa-file-prescription",
      ];
         @endphp

        <x-doctor.card :data="$appointments"  />
        <x-doctor.card :data="$patients"  />
        <x-doctor.card :data="$prescriptions"  />
      </div>
    </div>
</x-doctor.layout>