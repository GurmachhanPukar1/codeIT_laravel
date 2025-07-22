<x-layout>
    <section class="bg-gray-50">
        <div class="container mx-auto px-4 py-12">
            <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-8">Create Company</h1>

            <form action="{{ route("save_company") }}" method="post" enctype="multipart/form-data" class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                        <input type="text" name="name" id="name" class="w-full border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200 bg-gray-50" required>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Company Email</label>
                        <input type="email" name="email" id="email" class="w-full border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200 bg-gray-50" required>
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Company Phone</label>
                        <input type="tel" name="phone" id="phone" class="w-full border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200 bg-gray-50">
                    </div>

                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Company Address</label>
                        <input type="text" name="address" id="address" class="w-full border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200 bg-gray-50">
                    </div>

                    <div class="col-span-2">
                        <label for="logo" class="block text-sm font-medium text-gray-700 mb-2">Upload Company Logo</label>
                        <input type="file" name="logo" id="logo" class="w-full border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200 bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                    </div>

                    <div class="md:col-span-2 flex justify-center mt-6">
                        <button type="submit" class="w-full md:w-auto bg-indigo-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-indigo-700 transition duration-200 shadow-md hover:shadow-lg">Save Record</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="bg-white">
        <div class="container mx-auto px-4 py-12">
            <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-8">All Companies</h1>

            <div class="mt-8 overflow-x-auto">
                <table class="w-full text-sm text-gray-700 bg-white rounded-xl shadow-lg">
                    <thead>
                        <tr class="bg-indigo-50 text-indigo-900 uppercase text-xs font-semibold">
                            <th class="border border-gray-200 p-4">SN</th>
                            <th class="border border-gray-200 p-4">Name</th>
                            <th class="border border-gray-200 p-4">Email</th>
                            <th class="border border-gray-200 p-4">Phone</th>
                            <th class="border border-gray-200 p-4">Address</th>
                            <th class="border border-gray-200 p-4">Logo</th>
                            <th class="border border-gray-200 p-4">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($companies as $i => $company)
                            <tr class="hover:bg-indigo-50 transition duration-150">
                                <td class="border border-gray-200 p-4 text-center">{{ $i+1 }}</td>
                                <td class="border border-gray-200 p-4">{{ $company->name }}</td>
                                <td class="border border-gray-200 p-4">{{ $company->email }}</td>
                                <td class="border border-gray-200 p-4">{{ $company->phone }}</td>
                                <td class="border border-gray-200 p-4">{{ $company->address }}</td>
                                <td class="border border-gray-200 p-4">
                                    <img src="{{ asset($company->logo) }}" alt="{{ $company->name }} logo" class="h-12 w-auto mx-auto rounded-md">
                                </td>
                                <td class="border border-gray-200 p-4 text-center">
                                    <div class="flex justify-center gap-3">
                                        <a href="{{ route("edit_company", $company->id) }}" class="text-indigo-600 hover:text-indigo-800 font-medium">Edit</a>
                                        <form action="/delete-company/{{ $company->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="bg-red-500 text-white px-4 py-1.5 rounded-md hover:bg-red-600 transition duration-200">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-layout>
