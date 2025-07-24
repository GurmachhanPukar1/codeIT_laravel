<x-layout>

    <section class="bg-white">
        <div class="container mx-auto px-4 py-12">
            <div class="flex items-center justify-between px-4 py-6">
                <h1 class="text-4xl font-extrabold text-gray-900">All Managers</h1>
                <a href="{{ route('manager.create') }}"
                    class="bg-indigo-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-indigo-700 transition duration-200 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    aria-label="Add New Employee">
                    Add New Manager
                </a>
            </div>

            <div class="mt-8 overflow-x-auto">
                <table class="w-full text-sm text-gray-700 bg-white rounded-xl shadow-lg">
                    <thead>
                        <tr class="bg-indigo-50 text-indigo-900 uppercase text-xs font-semibold">
                            <th class="border border-gray-200 p-4">SN</th>
                            <th class="border border-gray-200 p-4">Name</th>
                            <th class="border border-gray-200 p-4">Email</th>
                            <th class="border border-gray-200 p-4">Phone</th>
                            <th class="border border-gray-200 p-4">Company</th>
                            <th class="border border-gray-200 p-4">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($managers as $i => $manager)
                            <tr class="hover:bg-indigo-50 transition duration-150">
                                <td class="border border-gray-200 p-4 text-center">{{ $i + 1 }}</td>
                                <td class="border border-gray-200 p-4">{{ $manager->name }}</td>
                                <td class="border border-gray-200 p-4">{{ $manager->email }}</td>
                                <td class="border border-gray-200 p-4">{{ $manager->phone }}</td>
                                <td class="border border-gray-200 p-4">{{ $manager->company->name }}</td>

                                <td class="border border-gray-200 p-4 text-center">
                                    <div class="flex justify-center gap-3">
                                        <a href="{{ route('manager.edit', $manager->id) }}"
                                            class="text-indigo-600 hover:text-indigo-800 font-medium">Edit</a>
                                        <form action="{{ route('manager.destroy', $manager->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="bg-red-500 text-white px-4 py-1.5 rounded-md hover:bg-red-600 transition duration-200">Delete</button>
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
