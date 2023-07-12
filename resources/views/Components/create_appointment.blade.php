<div class="bg-white rounded-lg shadow-md p-6 max-w-200">
  <h2 class="text-2xl font-semibold mb-4">Appointment Form</h2>
  @if(session('success'))
    <div class="text-green-500 mb-4">{{ session('success') }}</div>
  @endif
  <form method="POST" action="">
    @csrf
    <div class="mb-4">
      <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone:</label>
      <input type="tel" id="phonenumber" name="phonenumber" value="{{ old('phonenumber') }}" class="w-full border border-gray-300 px-3 py-2 rounded-sm focus:outline-none focus:border-blue-500" placeholder="Enter your phone number" >
      @error('phonenumber')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-6">
      <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Preferred Date:</label>
      <input type="date" id="date" name="date" value="{{ old('date') }}" class="w-full border border-gray-300 px-3 py-2 rounded-sm focus:outline-none focus:border-blue-500" >
      @error('date')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-6">
      <label for="time" class="block text-gray-700 text-sm font-bold mb-2">Preferred Time:</label>
      <input type="time" id="time" name="time" value="{{ old('time') }}" class="w-full border border-gray-300 px-3 py-2 rounded-sm focus:outline-none focus:border-blue-500" >
      @error('time')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2">Payment Method:</label>
      <div>
        <input type="radio" id="tigopesa" name="paymentmethod" value="tigopesa" class="mr-2" {{ old('paymentmethod') === 'tigopesa' ? 'checked' : '' }}>
        <label for="tigopesa" class="text-gray-700">TigoPesa</label>
      </div>
      <div>
        <input type="radio" id="mpesa" name="paymentmethod" value="mpesa" class="mr-2" {{ old('paymentmethod') === 'mpesa' ? 'checked' : '' }}>
        <label for="mpesa" class="text-gray-700">M-Pesa</label>
      </div>
      <div>
        <input type="radio" id="airtelmoney" name="paymentmethod" value="airtelmoney" class="mr-2" {{ old('paymentmethod') === 'airtelmoney' ? 'checked' : '' }}>
        <label for="airtelmoney" class="text-gray-700">Airtel Money</label>
      </div>
      @error('paymentmethod')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-6">
      <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
      <textarea name="description" class="w-full h-32 px-3 py-2 border border-gray-300 rounded-sm focus:outline-none focus:border-blue-500" placeholder="Enter your description about the appointment">{{ old('description') }}</textarea>
      @error('description')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>
    <button name="submit" type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-sm hover:bg-blue-600">Book Appointment</button>
  </form>
</div>
