<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\PDF;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CetakLaporanController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // Ambil query pencarian dari request
        $search = $request->get('search');

        // Filter data peminjaman berdasarkan pencarian
        $riwayat_peminjaman = Peminjaman::with('user', 'buku')
            ->when($search, function ($query, $search) {
                return $query->whereHas('user', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                })->orWhereHas('buku', function ($q) use ($search) {
                    $q->where('judul', 'like', '%' . $search . '%');
                });
            })
            ->get();

        // Format tanggal periode
        $startDate = $riwayat_peminjaman->min('tanggal_pinjam');
        $endDate = $riwayat_peminjaman->max('tanggal_pengembalian');
        $startDateFormatted = \Carbon\Carbon::parse($startDate)->format('d M Y');
        $endDateFormatted = \Carbon\Carbon::parse($endDate)->format('d M Y');

        // Render PDF dengan data yang sudah difilter
        $pdf = PDF::loadView('peminjaman.laporan_pdf', [
            'riwayat_peminjaman' => $riwayat_peminjaman,
            'startDate' => $startDateFormatted,
            'endDate' => $endDateFormatted
        ]);

        // Mengunduh file PDF
        return $pdf->download('laporan_peminjaman.pdf');
    }
}
