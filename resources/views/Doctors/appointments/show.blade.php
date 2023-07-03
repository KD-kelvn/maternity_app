<x-doctor.layout>
    {{-- this page for viewing a single appointment --}}
<div class="single-appointment shadow bd-white rounded px-4 py-2">
    <div class="wrapper border border-gray-200 rounded relative p-2">
     <h2 class="text-3xl font-semibold mb-2">Appointment detail</h2>
     <div class="desc w-[80%]">
      <h4>Description:</h4>
      <p class="text-gray-900">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum incidunt amet voluptatum unde deserunt tempora iste ab. Pariatur sequi voluptate ut facilis beatae eveniet veniam nam error minima. Consequatur, reprehenderit.</p>
     </div>
  
     <div class="appointment-details flex flex-col gap-3 mt-6">
      <div class="item">
          <h4>Doctor of this session:</h4>
          <p class="text-gray-900">Dr. John Doe</p>
      </div>
      <div class="item">
          <h4>Session Date:</h4>
          <p class="text-gray-900">12/12/2012 </p>
      </div>
      <div class="item">
          <h4>Session time: </h4>
          <p class="text-gray-900">12:30 PM</p>
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
                    Joyce mrembo
                </td>
                <td class="px-6 py-4">
                  joyce@example.com
                </td>
                <td class="px-6 py-4">
                  0987654321
                </td>
                <td class="px-6 py-4">
                  <form action="" class="flex gap-4">
                    <input type="submit" value="Accept" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    <input type="submit" value="Reject" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">

                  </form>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
   
     <div class="reschedule-appointment mt-6">
        <h2>Re-schedule appointment here</h2>
     </div>
    </div>
  </div>
</x-doctor.layout>