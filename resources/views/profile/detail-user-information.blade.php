<x-form-section submit="updateDetailUser">
    <x-slot name="title">
        {{ __('Detail User') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Masukan detail informasi anda') }}
    </x-slot>

    <x-slot name="form">
        @csrf
        <!-- NIM -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="nim" value="{{ __('NIM') }}" />
            <x-input id="nim" type="number" class="mt-1 block w-full" wire:model="nim" name="nim"
                autocomplete="nim" placeholder="220102007" />
        </div>

        <!-- Jurusan -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="jurusan" value="{{ __('Jurusan') }}" />
            <select name="jurusan" id="" wire:model="jurusan"
                class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="">Pilih Jurusan</option>
                <option value="Komputer & Bisnis">Komputer & Bisnis</option>
                <option value="Rekayasa Mesi & Industri Pertanian">Rekayasa Mesin & Industri
                    Pertanian</option>
                <option value="Rekayasa Elektro & Mekatronika">Rekayasa Elektro & Mekatronika
                </option>
            </select>
            <x-input-error for="prodi" class="mt-2" />
        </div>

        <!-- Prodi -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="jurusan" value="{{ __('Program Studi') }}" />
            <select name="prodi" id="prodi" wire:model="prodi"
                class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                wire:model="state.prodi">
                <option value="">Pilih Prodi</option>
                <option value="D-3 TI">D-3 Teknik Informatika</option>
                <option value="D-4 RKS">D-4 Rekayasa Keamanan Siber</option>
                <option value="D-4 ALKS">D-4 Akuntansi Lembaga Keuangan Syariah</option>
                <option value="D-4 TRM">D-4 Teknologi Rekayasa Multimedia</option>
                <option value="D-4 TPPL">Teknik Pengendalian Pencemaran Lingkungan</option>
                <option value="D-4 PPA">D-4 Pengembangan Produk Agroindustri</option>
                <option value="D-3 TM">D-3 Teknik Mesin</option>
                <option value="D-4 TRMK">D-4 Teknologi Rekayasa Mekatronika</option>
                <option value="D-3 TE">D-3 Teknik Elektro</option>
                <option value="D-3 TL">D-3 Teknik Listrik</option>
            </select>
        </div>

        <!-- KIP -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="kip" value="{{ __('KIP') }}" />
            <select name="kip" id="" wire:model="kip"
                class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="">Apakah anda pengguna KIP?</option>
                <option value="yes">Pengguna KIP</option>
                <option value="no">Bukan Pengguna KIP</option>
            </select>
        </div>

        <!-- Kelompok UKT -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="kelompok" value="{{ __('Kelompok UKT') }}" />
            <x-input id="kelompok" type="text" class="mt-1 block w-full" wire:model="kelompok" name="kelompok" />
        </div>

        <!-- detail user id -->
        <x-input type="hidden" class="mt-1 block w-full" wire:model="detailUserId" name="detail_user_id" />
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
