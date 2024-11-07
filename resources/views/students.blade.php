<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <h3 class="text-3xl font-bold text-center text-gray-800 my-6">Halaman Students</h3>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 shadow-lg rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="py-3 px-4 text-left text-sm uppercase font-semibold">No</th>
                    <th class="py-3 px-4 text-left text-sm uppercase font-semibold">Nama</th>
                    <th class="py-3 px-4 text-left text-sm uppercase font-semibold">Kelas</th>
                    <th class="py-3 px-4 text-left text-sm uppercase font-semibold">Email</th>
                    <th class="py-3 px-4 text-left text-sm uppercase font-semibold">Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as  $student => $students)
                <tr>
                    <td class="border-t py-2 px-4 text-sm">{{ $students->id }}</td>
                    <td class="border-t py-2 px-4 text-sm">{{ $students->name}}</td>
                    <td class="border-t py-2 px-4 text-sm">{{ $students->grade->name }}</td>
                    <td class="border-t py-2 px-4 text-sm">{{ $students->email }}</td>
                    <td class="border-t py-2 px-4 text-sm">{{ $students->alamat}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
