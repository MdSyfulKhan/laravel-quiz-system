<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
  </head>

  <body>
    <nav class="bg-white shadow py-5 px-5 flex justify-between">
      <div class="">
        Quiz System
      </div>
      <div class="space-x-4">
        <a href="" class="text-gray-700 hover:text-blue-500">Category</a>
        <a href="" class="text-gray-700 hover:text-blue-500">Quiz</a>
        <a href="" class="text-gray-700 hover:text-blue-500">Welcome
          {{ $name }}</a>
        <a href="" class="text-gray-700 hover:text-blue-500">Logout</a>
      </div>
    </nav>
  </body>

</html>
