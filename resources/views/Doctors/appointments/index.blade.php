<x-doctor.layout>
    {{-- This page for requirement one --}}
  <div class="appointments-page mt-4">
    <div class="header text-3xl font-semibold mb-2">
        <h2>Appointments Manager</h2>
    </div>

    <div class="table-for-appointments">
        <div class="top-filter w-[88%] relative border border-gray-200 rounded-md ">
            <form action="/doctors/appointments/view" method="GET" class="w-full flex gap-4 items-center p-2">
                @csrf
                 <div class="input-date w-[76%] relative flex items-center gap-1">
                        <label for="" class="text-gray-500">Date</label>
                        <input type="date" name="date" id="" class="border border-gray-200 rounded-md p-2 w-full outline-none focus:outline-none">
                 </div>

                 <div class="submit-btn relative w-[20%]">
                        <button type="submit" class="bg-blue-500 w-full text-white px-4 py-2 rounded-md"> <i class="fa-solid fa-filter mr-4"></i> Filter</button>
                 </div>
            </form>
        </div>

        <table class="w-full text-sm text-left text-gray-500 mt-4">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Patient name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        session notes
                    </th>
                    <th scope="col" class="px-6 py-3">
                        status
                    </th>
                     <th scope="col" class="px-6 py-3">
                            Action
                     </th>
                </tr>
            </thead>
            <tbody>
                @if($appointments->count() > 0)
                @foreach($appointments as $appointment)
                <tr class="bg-white border-b">
                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{$appointment->user->name}}
                     </th>
                     <td class="px-6 py-4">
                         {{$appointment->date}} {{$appointment->time}}
                    </td>
                    <td class="px-6 py-4">
                       <p>{{$appointment->description}}</p>
                    </td>
                    <td class="px-6 py-4">
                        <span class="bg-green-500 text-white px-2 py-1 rounded-md">New</span>
                    </td>
                    <td class="px-6 py-4">
                        <a href="/doctors/appointments/{{$appointment->id}}" class="text-blue-500">View</a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        -
                     </th>
                     <td class="px-6 py-4">
                      -
                    </td>
                    <td class="px-6 py-4">
                       <p>--</p>
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                       -
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
  </div>
    
</x-doctor.layout>