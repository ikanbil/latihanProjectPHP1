<x-admin-dashboard>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div class="relative overflow-x-auto bg-white shadow-md rounded-lg mt-8">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Department
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Students
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grades as $grade)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $grade->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $grade->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $grade->Department->name }}
                        </td>
                        <td class="px-6 py-4">
                            <ul>
                                @foreach ($grade->students as $student)
                                    <li>{{ $student->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-dashboard>
