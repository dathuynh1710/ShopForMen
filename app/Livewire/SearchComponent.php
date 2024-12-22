<?php

namespace App\Livewire;

use App\Models\DanhMuc;
use App\Models\MatHang;
use Livewire\Component;

class SearchComponent extends Component
{
    public $q;
    public $search_term;
    public function mount()
    {
        $this->fill(request()->only('q'));
        $this->search_term = '%' . $this->q . '%';
    }

    public function render()
    {
        $dmsps = DanhMuc::all();
        $totalMH = MatHang::count();
        $sanphams = MatHang::where('tenmathang', 'like', $this->search_term)->orderBy('created_at', 'DESC')->paginate(6);
        return view('livewire.search-component', [
            'sanphams' => $sanphams,
            'dmsps' => $dmsps,
            'totalMH' => $totalMH
        ]);
    }
}
