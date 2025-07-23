<x-layout>
    <section>
        <div class="container mx-auto px-4 py-10">
            <h1 class="text-3xl font-bold text-center text-gray-800">Edit Employee</h1>

            {{-- <form action="/update-company/{{ $company->id }}" method="post" class="mt-6"> --}}
            <form action="{{ route('update_company', $company->id) }}" method="post" enctype="multipart/form-data"
                class="mt-6">
                @csrf
                @method('patch')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Company Name</label>
                        <input type="text" value="{{ $company->name }}" name="name" id="name"
                            class="mt-1 w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Company Email</label>
                        <input type="text" value="{{ $company->email }}" name="email" id="email"
                            class="mt-1 w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Company Phone</label>
                        <input type="text" value="{{ $company->phone }}" name="phone" id="phone"
                            class="mt-1 w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700">Company Address</label>
                        <input type="text" value="{{ $company->address }}" name="address" id="address"
                            class="mt-1 w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="col-span-2">
                        <label for="logo" class="block text-sm font-medium text-gray-700 mb-2">Upload Company
                            Logo</label>
                        <input type="file" name="logo" id="logo"
                            class="w-full border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200 bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                    </div>

                    <div class="md:col-span-2 flex justify-center">
                        <button type="submit"
                            class="w-full md:w-auto bg-blue-600 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-700 transition duration-200">Update
                            Record</button>
                    </div>


                </div>
            </form>
        </div>
    </section>


</x-layout>
