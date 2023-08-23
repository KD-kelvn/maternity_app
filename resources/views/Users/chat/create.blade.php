<x-layout>
    {{-- file upload, topic title --}}

    <div class="bg-white rounded-lg flex flex-col w-[88%] shadow-lg p-2">
   
        <form action="" method="post" class="flex flex-col space-y-2">
            @csrf
            <div class="flex flex-col space-y-2">
                <label for="topic" class="text-lg text-gray-700 font-semibold leading-normal mb-2">Upload file</label>
                <input type="file" name="topic_file" id="fileInput" class="border-2 border-gray-400/20 rounded-lg px-2 py-1 outline-none">
                {{-- img preview --}}
                <div class="preview-img mx-auto" id="filePreview">

                </div>
            </div>
            <div class="flex flex-col space-y-2">
                <label for="topic" class="text-lg text-gray-700 font-semibold leading-normal mb-2">Topic title</label>
                <input type="text" name="topic_title" id="topic_tilte" class="border-2 border-gray-400/20 rounded-lg px-2 py-1 outline-none" placeholder="Type your topic here...">
            </div>
            <div class="flex flex-col space-y-2">
                <label for="topic" class="text-lg text-gray-700 font-semibold leading-normal mb-2">Topic description</label>
                <textarea name="topic_desc" id="topic_desc" cols="1" rows="1" class="border-2 border-gray-400/20 rounded-lg px-2 py-1 outline-none resize-none" placeholder="Type your topic here..."></textarea>
            </div>
        
            <div class="flex justify-center items-center">
                <button type="submit" class="bg-main/90 text-white px-4 py-2 rounded-lg">
                    Publish a topic
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </form>

        <script>
            const fileInput = document.getElementById('fileInput');
            const filePreview = document.getElementById('filePreview');
        
            fileInput.addEventListener('change', function() {
                const files = fileInput.files;
                if (files.length > 0) {
                    const file = files[0];
                    const fileType = file.type.split('/')[0];
        
                    if (fileType === 'image') {
                        const img = document.createElement('img');
                        img.src = URL.createObjectURL(file);
                        img.classList.add('w-[260px]', 'h-[260px]');
                        filePreview.innerHTML = '';
                        filePreview.appendChild(img);
                    } else {
                        filePreview.textContent = `Selected file: ${file.name}`;
                    }
                } else {
                    filePreview.innerHTML = '';
                }
            });
        </script>
        
</x-layout>