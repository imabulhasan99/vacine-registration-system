<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-white p-8 rounded shadow-md w-96">
            @session('success')
                <div class="p-4 bg-green-100">
                    {{ $value }}
                </div>
            @endsession
            <h2 class="text-2xl font-semibold mb-6">Registration Form</h2>
      
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 text-sm font-medium mb-2">Name <span class="text-red-500">*</span></label>
                    <input type="text" id="name" name="name" class="w-full border p-2 rounded">
                </div>
                @error('name')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Email <span class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" class="w-full border p-2 rounded">
                </div>
                @error('email')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password <span class="text-red-500">*</span></label>
                    <input type="password" id="password" name="password" class="w-full border p-2 rounded">
                </div>
                @error('password')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <!-- Phone -->
                <div class="mb-4">
                    <label for="phone" class="block text-gray-600 text-sm font-medium mb-2">Phone <span class="text-red-500">*</span></label>
                    <input type="text" id="phone" name="phone" class="w-full border p-2 rounded">
                </div>
                @error('phone')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <!-- NID -->
                <div class="mb-4">
                    <label for="nid" class="block text-gray-600 text-sm font-medium mb-2">NID <span class="text-red-500">*</span></label>
                    <input type="number" id="nid" name="nid" class="w-full border p-2 rounded">
                </div>
                @error('nid')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <!-- Center Dropdown with Search -->
                <div class="mb-4">
                    <label for="center" class="block text-gray-600 text-sm font-medium mb-2">Center <span class="text-red-500">*</span></label>
                    <select id="center" name="center_id" class="w-full border p-2 rounded">
                      <option value="#">Select Center</option>
                      @foreach ($centers as $center)
                        <option value="{{$center->id}}">{{ $center->name }}</option>
                      @endforeach
                      
                    </select>
                </div>
                @error('center_id')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Register</button>
                </div>

            </form>

        </div>
    </div>

</body>
</html>
