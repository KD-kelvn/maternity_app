<div class="bg-white rounded-lg shadow-md p-6 max-w-200">
  <h2 class="text-2xl font-semibold mb-4">Appointment Form</h2>
  <form>
    <div class="mb-4">
      <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
      <input type="text" id="name" name="name" class="w-full border border-gray-300 px-3 py-2 rounded-sm focus:outline-none focus:border-blue-500" placeholder="Enter your name" required>
    </div>
    <div class="mb-4">
      <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
      <input type="email" id="email" name="email" class="w-full border border-gray-300 px-3 py-2 rounded-sm focus:outline-none focus:border-blue-500" placeholder="Enter your email" required>
    </div>
    <div class="mb-4">
      <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone:</label>
      <input type="tel" id="phone" name="phone" class="w-full border border-gray-300 px-3 py-2 rounded-sm focus:outline-none focus:border-blue-500" placeholder="Enter your phone number" required>
    </div>
    <div class="mb-6">
      <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Preferred Date:</label>
      <input type="date" id="date" name="date" class="w-full border border-gray-300 px-3 py-2 rounded-sm focus:outline-none focus:border-blue-500" required>
    </div>
    <div class="mb-6">
      <label for="time" class="block text-gray-700 text-sm font-bold mb-2">Preferred Time:</label>
      <input type="time" id="time" name="time" class="w-full border border-gray-300 px-3 py-2 rounded-sm focus:outline-none focus:border-blue-500" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-sm hover:bg-blue-600">Book Appointment</button>
  </form>
</div>
