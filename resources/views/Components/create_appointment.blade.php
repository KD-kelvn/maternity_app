<div class="bg-white rounded-lg shadow-md p-6 max-w-200">
  <h2 class="text-2xl font-semibold mb-4">Appointment Form</h2>
  @if(session('success'))
    <div class="text-green-500 mb-4">{{ session('success') }}</div>
  @endif
  <form method="POST" action="">
    @csrf
    <div class="mb-4">
      <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone:</label>
      <input type="tel" id="phonenumber" name="phonenumber" class="w-full border border-gray-300 px-3 py-2 rounded-sm focus:outline-none focus:border-blue-500" placeholder="Enter your phone number" >
      @error('phonenumber')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-6">
      <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Preferred Date:</label>
      <input type="date" id="date" name="date" class="w-full border border-gray-300 px-3 py-2 rounded-sm focus:outline-none focus:border-blue-500" >
      @error('date')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-6">
      <label for="time" class="block text-gray-700 text-sm font-bold mb-2">Preferred Time:</label>
      <input type="time" id="time" name="time" class="w-full border border-gray-300 px-3 py-2 rounded-sm focus:outline-none focus:border-blue-500" >
      @error('time')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-6">
      <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
      <textarea name="description" class="w-full h-32 px-3 py-2 border border-gray-300 rounded-sm focus:outline-none focus:border-blue-500" placeholder="Enter your description about the appointment"></textarea>
      @error('description')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>
    <button name="submit" type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-sm hover:bg-blue-600">Book Appointment</button>
  </form>
</div>
