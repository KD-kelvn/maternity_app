<x-layout>
    @foreach ($doctors as $doctor)
        <div class="max-w-full w-[88%] mx-auto mb-6 bg-white rounded-lg shadow-md p-5">
            <div class="head flex items-center gap-4">
                <img class="w-[10%] h-[10%] rounded-full" src="https://picsum.photos/200" alt="Profile picture">
                <div class="intro w-[64%]">
                <h2 class=" text-2xl font-semibold mt-3">{{ $doctor->name }}</h2>
                <p class="text-gray-600 mt-1">{{ $doctor->specialty }}</p>
                </div>
            </div>
            
                <div class="flex items-center mt-5 mb-5 ml-[3.4rem]">
                <a href="#" class="text-blue-500 hover:text-blue-700 mx-3">Twitter</a>
                <a href="#" class="text-blue-500 hover:text-blue-700 mx-3">LinkedIn</a>
                <a href="#" class="text-blue-500 hover:text-blue-700 mx-3">Instagram</a>
                </div>

                <a href="/users/doctors/{{$doctor->id}}" class="bg-transparent ml-[4.4rem] hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                View profile
                </a>
            </div>
@endforeach
</x-layout>