<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <tr>
                            <th class="px-6 py-3 text-xs font-medium text-gray-700 uppercase tracking-wider">
                                Nama
                            </th>
                            <th class="px-6 py-3 text-xs font-medium text-gray-700 uppercase tracking-wider">
                                NIM
                            </th>
                            <th class="px-6 py-3 text-xs font-medium text-gray-700 uppercase tracking-wider">
                                Email
                            </th>
                            <th class="px-6 py-3 text-xs font-medium text-gray-700 uppercase tracking-wider">
                                Jurusan
                            </th>
                            <th class="px-6 py-3 text-xs font-medium text-gray-700 uppercase tracking-wider">
                                Kelompok
                            </th>
                        </tr>
                        @foreach ($detailUsers as $detailUser)
                            <tr class="text-center">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                    {{ $detailUser->user->name }}
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                    {{ $detailUser->nim }}
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                    {{ $detailUser->user->email }}
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                    {{ $detailUser->jurusan }}
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                    {{ $detailUser->kelompok }}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
