<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        {{-- <img src="{{ asset('storage/images/6sET8QoxF9xujtrFUH6MH8T00iJIfx8vipJgkpfm.jpg')}}" alt=""  /> --}}
        <div class="md:w-1/3 mx-auto">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="text-red-400 bg-slate-300 p-2 mb-2 font-bold rounded">{{ $error }} </p>
                        @endforeach
                    @endif
                </div>
                <form action="{{ route('upload-file') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Upload</label>
                        <input type="file" name="image" class="w-full py-2 px-3 border rounded" />
                    </div>
                    <div class="mb-4">
                        <input type="submit" value="Submit" class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer" />
                    </div>
                </form>
                <a class="bg-blue-500 text-white font-semibold p-3 rounded" href="{{ route('download') }}">Download Image</a>
            </div>
        </div>
    </div>
</body>
</html>
