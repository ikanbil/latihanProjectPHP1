<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <h3 class="text-3xl font-bold text-center text-gray-800 my-6">Halaman Kelas</h3>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 shadow-lg rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="py-3 px-4 text-left text-sm uppercase font-semibold">No</th>
                    <th class="py-3 px-4 text-left text-sm uppercase font-semibold">kelas</th>
                    <th class="py-3 px-4 text-left text-sm uppercase font-semibold">Siswa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($grades as $grade)
                <tr>
                    <td class="border-t py-2 px-4 text-sm">{{ $grade->id }}</td>
                    <td class="border-t py-2 px-4 text-sm">{{ $grade->name }}</td>
                    <td class="border-t py-2 px-4 text-sm">
                        @foreach ($grade->students as $student)
                        <ul>
                            <li>{{$student->name}}</li>
                        </ul>
                        @endforeach
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
