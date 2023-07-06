<x-layout>
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Appointment Details</h2>
        <div class="flex items-center">
          <div class="w-1/3">
            <img src="path_to_image" alt="Profile Image" class="w-full h-auto rounded-full">
          </div>
          <div class="w-2/3 ml-6">
            <h3 class="text-lg font-semibold"> Dr. {{$appointment->doctor->name}}</h3>
            <p class="text-gray-500">{{$appointment->doctor->email}}</p>
            <p class="text-gray-500">{{$appointment->doctor->phone}}</p>
          </div>
        </div>
        <div class="mt-6">
          <p class="text-gray-700 text-sm font-semibold">Patient Name</p>
          <p class="text-gray-500">{{$appointment->user->name}}</p>
        </div>
        <div class="mt-4">
          <p class="text-gray-700 text-sm font-semibold">Patient Email</p>
          <p class="text-gray-500">{{$appointment->user->email}}</p>
         
        </div> <div class="mt-4">
            <p class="text-gray-700 text-sm font-semibold">Patient Phonenumber</p>
            <p class="text-gray-500">{{$appointment->phonenumber}}</p>
        </div>


        <div class="mt-4">
          <p class="text-gray-700 text-sm font-semibold">Date of appointment</p>
          <p class="text-gray-500">{{$appointment->appointment_date}}</p>
        </div>

        <div class="mt-4">
            <p class="text-gray-700 text-sm font-semibold">Time of appointment</p>
            <p class="text-gray-500">{{$appointment->appointment_time}}</p>
          </div>
        <div class="mt-4">
          <p class="text-gray-700 text-sm font-semibold">Description</p>
          <p class="text-gray-500">{{$appointment->description}}</p>
        </div>
        <div class="mt-6">
          <button class="bg-blue-500 text-white px-4 py-2 rounded-sm hover:bg-blue-600">Reschedule</button>
          <button class="bg-red-500 text-white px-4 py-2 rounded-sm hover:bg-red-600 ml-2">Cancel</button>
        </div>
      </div>
      
 </x-layout>
