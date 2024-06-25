<?php

namespace App\Livewire\Profile;

use App\Models\DetailUser;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class DetailUserInformation extends Component
{
    public $nim;
    public $jurusan;
    public $prodi;
    public $kelompok;
    public $kip;

    public function mount()
    {
        $detailUser = DetailUser::where('user_id', Auth::user()->id)->first();

        if ($detailUser) {
            $this->nim = $detailUser->nim;
            $this->jurusan = $detailUser->jurusan;
            $this->prodi = $detailUser->prodi;
            $this->kelompok = $detailUser->kelompok;
            $this->kip = $detailUser->kip;
        }
    }
    public function updateDetailUser(DetailUser $detailUser)
    {
        DetailUser::where('user_id', Auth::user()->id)->update([
            'nim' => $this->nim,
            'jurusan' => $this->jurusan,
            'prodi' => $this->prodi,
            'kelompok' => $this->kelompok,
            'kip' => $this->kip,
            ]);
    }

    public function render()
    {
        return view('profile.detail-user-information');
    }
}