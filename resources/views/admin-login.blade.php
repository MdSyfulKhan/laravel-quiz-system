<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Admin login</title>
    @vite('resources/css/app.css')
  </head>

  <body class="bg-gray-200 flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
      <h2 class="text-2xl text-center text-gray-800 mb-6">Admin Login</h2>
      @error('user')
        <div class="text-red-500">{{ $message }}</div>
      @enderror
      <form action="/admin-login" method="POST">
        @csrf
        <div class="input-group mb-6">
          <label for="adminName" class="mb-2 w-full">Admin Name</label>
          <input name="name" type="text" id="adminName"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-green-500"
            placeholder="Enter Admin name" value="{{ old('name') }}">
          @error('name')
            <div class="text-red-500">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-group mb-6">
          <label for="adminPassword" class="mb-2 w-full">Admin Password</label>
          <input name="password" type="password" id="adminPassword"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-green-500"
            placeholder="Enter Admin password" value="{{ old('password') }}">
          @error('password')
            <div class="text-red-500">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit"
          class="w-full bg-green-700 text-white py-2 px-5 rounded cursor-pointer">Login</button>
      </form>
    </div>
  </body>

</html>
