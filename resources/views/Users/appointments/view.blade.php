<x-layout>
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Your appointments</h2>
        @if ($appointments->count() > 0) 
            <table class="w-full">
                <thead>
                <tr>
                    <th class="py-2">Patient</th>
                    <th class="py-2">Doctor</th>
                    <th class="py-2">Status</th>
                    <th class="py-2">Actions</th> 
                </tr>
                </thead>
            
                <tbody>
                @foreach ($appointments as $appointment)
                <tr>
                    <td class="py-2 text-gray-500">{{ $appointment->user->name }}</td>
                    <td class="py-2 text-gray-500">{{ $appointment->doctor->name }}</td>
                    <td class="py-2 text-gray-500">Pending</td>
                    <td class="py-2">
                        <a class="text-blue-500 font-bold" href="{{ route('appointment_detail', $appointment->id) }}">view</a>
                        <a class="text-red-500 font-bold" href="">delete</a>
                    </td>
                </tr>
                @endforeach
            
                <!-- Add more rows for additional appointments -->
                </tbody>
            </table>
        @else 
            <p>No Appointment found</p>
        @endif
       
      </div>
      
 </x-layout>
