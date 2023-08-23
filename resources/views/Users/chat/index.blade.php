<x-layout>
    <div class="bg-white rounded-lg flex flex-col w-[88%] shadow-lg p-2">
     <x-topic/>
     <div class="flex flex-col w-full border-2 border-gray-400/20 rounded-lg pt-2 mx-auto pb-4 px-2">
        <h3 class="text-lg text-gray-700 font-semibold leading-normal mb-2">Community response</h3>
        <x-comment/>
        <x-comment/>
        <x-sendComment/>
     </div>
     <div class="create-topic-container w-full mx-auto mt-8">
        <a href="/users/chat/create" class="right-btn-area flex justify-center items-center">
            <button type="submit" class="bg-main w-[60%] text-white px-4 py-2 rounded-lg">
                Create a topic
                <i class="fas fa-paper-plane"></i>
            </button>
        </a>
     </div>
     </div>

</x-layout>