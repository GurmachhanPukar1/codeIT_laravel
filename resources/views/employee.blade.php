<x-layout>
    <div class="bg-white p-8 rounded-xl shadow-md max-w-lg w-full mx-auto mt-10">
        <form action="" class="space-y-7">
            @csrf
            <div>
                <h1 class="text-3xl font-bold text-gray-900 text-center py-6">Register Employee</h1>
            </div>
            <div>
                <label for="employee_name" class="block text-sm font-semibold text-gray-800">Employee Name</label>
                <input type="text" name="employee_name" id="employee_name" required class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-400 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 py-3 px-4 text-base transition duration-200 ease-in-out" placeholder="Enter full name">
            </div>
            <div>
                <label for="employee_email" class="block text-sm font-semibold text-gray-800">Employee Email</label>
                <input type="email" name="employee_email" id="employee_email" required class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-400 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 py-3 px-4 text-base transition duration-200 ease-in-out" placeholder="Enter email address">
            </div>
            <div>
                <label for="employee_phone" class="block text-sm font-semibold text-gray-800">Employee Phone</label>
                <input type="tel" name="employee_phone" id="employee_phone" required class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-400 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 py-3 px-4 text-base transition duration-200 ease-in-out" placeholder="Enter phone number">
            </div>
            <div>
                <label for="company_id" class="block text-sm font-semibold text-gray-800">Company ID</label>
                <input type="text" name="company_id" id="company_id" required class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-400 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 py-3 px-4 text-base transition duration-200 ease-in-out" placeholder="Enter company ID">
            </div>
            <div>
                <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 to-indigo-700 text-white py-3 px-6 rounded-lg hover:from-indigo-700 hover:to-indigo-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50 text-base font-semibold transition duration-200 ease-in-out">Submit</button>
            </div>
        </form>
    </div>
</x-layout>
