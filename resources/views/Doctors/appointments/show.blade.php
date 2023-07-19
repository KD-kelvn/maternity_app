<x-doctor.layout>
    {{-- this page for viewing a single appointment --}}
<div class="single-appointment shadow bd-white rounded px-4 py-2">
    <div class="wrapper border border-gray-200 rounded relative p-2">
     <h2 class="text-3xl font-semibold mb-2">Appointment detail</h2>
     <div class="session-status">
        <div class="status flex gap-4 mt-4 mb-4">
            <div class="item flex flex-col gap-2">
                <h4 class="text-xl font-semibold">Session status</h4>
                <p class="{{$appointment->status == "pending"? "text-orange-500 ":($appointment->status=="rejected"? "text-red-600": "text-green-600")}} capitalize">{{$appointment->status}}</p>
            </div>
            <div class="item flex flex-col gap-2">
                <h4 class="text-xl font-semibold">Session type</h4>
                <p class="text-gray-900">Online</p>
            </div>
            <div class="item flex flex-col gap-2">
                <h4 class="text-xl font-semibold">Session fee</h4>
                <p class="text-gray-900">Tsh. 2000</p>
            </div>
        </div>
     </div>
     <div class="desc w-[80%]">
      <h4>Description:</h4>
      <p class="text-gray-900">{{$appointment->description}}</p>
     </div>
  
     <div class="appointment-details flex flex-col gap-3 mt-6">
      <div class="item">
          <h4>Doctor of this session:</h4>
          <p class="text-gray-900">{{$doctor->name}}</p>
      </div>
      <div class="item">
          <h4>Session Date:</h4>
          <p class="text-gray-900">{{$appointment->appointment_date}} </p>
      </div>
      <div class="item">
          <h4>Session time: </h4>
          <p class="text-gray-900">{{$appointment->appointment_time}}</p>
      </div>
      <div class="item">
          <h4>Session Location: </h4>
          <p class="text-gray-900">None</p>
      </div>
  
     </div>
     <div class="patient-details mt-4">
      <h3 class="text-2xl font-bold">Patient details</h3>
      <table class="w-full text-sm text-left text-gray-500 mt-4">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 gap-1">
            <tr >
                <th scope="col" class="px-6 py-3 border-b-4 border-sky-400 ">
                    Patient ID
                </th>
                <th scope="col" class="px-6 py-3 border-b-4 border-sky-400 ">
                    Patient name
                </th>
                <th scope="col" class="px-6 py-3 border-b-4 border-sky-400 ">
                   Email
                </th>
                <th scope="col" class="px-6 py-3 border-b-4 border-sky-400 ">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3 border-b-4 border-sky-400 ">
                    Action
                </th>
            
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b">
                 <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    123f78d
                 </th>
                 <td class="px-6 py-4">
                    {{$appointment->user->name}}
                </td>
                <td class="px-6 py-4">
                  {{$appointment->user->email}}
                </td>
                <td class="px-6 py-4">
                    {{$appointment->user->phone}}
                </td>
                <td class="px-6 py-4">
                  <form action="/doctors/appointments/{{$appointment->id}}" method="POST" class="flex gap-4">
                    @csrf
                    @if($appointment->status == "pending")
                    <input type="submit" name="accept" value="Accept" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    <input type="submit" name="reject" value="Reject" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    @else
                    <input type="submit" name="pending" value="Set Pending" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                    @endif
                  </form>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
   
    
     <div class="reschedule-appointment mt-6">
        <h2 class="text-2xl font-semibold">Re-schedule appointment here</h2>
        <div class="note-info-icon w-[80%] flex gap-2 mb-4 mt-4">
            <i class="fas fa-info-circle text-orange-500 text-xl"></i>
            <p class="text-gray-800 text-xl">Note: You can only re-schedule appointment 24 hours before the appointment date or when status is on pending</p>
        </div>
        @if($appointment->status =="pending")
        <form action="/doctors/appointments/{{$appointment->id}}/reschedule" method="POST" class="w-[64%]">
            @csrf
            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-2">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" class="border border-gray-200 rounded p-2">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="time">Time</label>
                    <input type="time" name="time" id="time" class="border border-gray-200 rounded p-2">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location" class="border border-gray-200 rounded p-2">
                </div>
                <div class="flex gap-4">
                    <input type="submit" value="Re-schedule" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                </div>
            </div>
        </form>
        @else
        <div class="flex flex-col gap-4">
            <div class="flex flex-col gap-2">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="border border-gray-200 rounded p-2" disabled>
            </div>
            <div class="flex flex-col gap-2">
                <label for="time">Time</label>
                <input type="time" name="time" id="time" class="border border-gray-200 rounded p-2" disabled>
            </div>
            <div class="flex flex-col gap-2">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="border border-gray-200 rounded p-2" disabled>
            </div>
        
        </div>
        @endif
     </div>
    </div>
  </div>
</x-doctor.layout>