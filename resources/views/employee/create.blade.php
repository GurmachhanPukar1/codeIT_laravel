<x-layout>
    <section class="bg-gray-50">
        <div class="container mx-auto px-4 py-12">
            <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-8">Create Employee</h1>

            <form action="{{ route('employee.store') }}" method="post" enctype="multipart/form-data" class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Enter Employee Name</label>
                        <input type="text" name="name" id="name" class="w-full border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200 bg-gray-50" required>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Enter Employee Email</label>
                        <input type="email" name="email" id="email" class="w-full border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200 bg-gray-50" required>
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Enter Employee Phone</label>
                        <input type="tel" name="phone" id="phone" class="w-full border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200 bg-gray-50">
                    </div>

                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Select Company</label>
                        <select name="company" id="company">
                            @foreach ($companies as $c)
                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                        </select>

                    </div>


                    <div class="md:col-span-2 flex justify-center mt-6">
                        <button type="submit" class="w-full md:w-auto bg-indigo-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-indigo-700 transition duration-200 shadow-md hover:shadow-lg">Save Record</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

</x-layout>
