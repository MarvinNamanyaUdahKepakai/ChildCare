<?php 

namespace App\Controllers;

use App\Models\M_penjualan;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class menu_laporan extends BaseController
{
    public function export_pdf()
    {
        if (session()->get('level') == 1 || session()->get('level') == 2) {
            $model = new M_penjualan();

            $awal = $this->request->getPost('awal');
            $akhir = $this->request->getPost('akhir');

            // Get data absensi kantor berdasarkan filter
            $data['penjualan'] = $model->getAllPenjualanPeriode($awal, $akhir);
            $data['awal'] = $awal;
            $data['akhir'] = $akhir;
            
            // Load the dompdf library
            $dompdf = new Dompdf();

            // Set the HTML content for the PDF
            $data['title'] = 'Laporan Penjualan';
            $dompdf->loadHtml(view('laporan_penjualan/print_pdf_view',$data));
            $dompdf->setPaper('A4','landscape');
            $dompdf->render();
            
            // Generate file name with start and end date
            $file_name = 'laporan_penjualan_' . str_replace('-', '', $awal) . '_' . str_replace('-', '', $akhir) . '.pdf';

            // Output the generated PDF (inline or attachment)
            $dompdf->stream($file_name, ['Attachment' => 0]);

        } else {
            return redirect()->to('/');
        }
    }
        public function export_pdf_per_hari()
{

    if (session()->get('level') == 1 || session()->get('level') == 2) {
        $model = new M_penjualan();

        $tanggal = $this->request->getPost('tanggal');

            // Get data penjualan berdasarkan tanggal
        $data['penjualan'] = $model->getAllPenjualanPerHari($tanggal);
        $data['tanggal'] = $tanggal;

            // Load the dompdf library
        $dompdf = new Dompdf();

            // Set the HTML content for the PDF
        $data['title'] = 'Laporan Penjualan';
        $dompdf->loadHtml(view('laporan_penjualan/print_pdf_view',$data));
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();

            // Generate file name with start and end date
        $file_name = 'laporan_penjualan_' . str_replace('-', '', $awal) . '_' . str_replace('-', '', $akhir) . '.pdf';

            // Output the generated PDF (inline or attachment)
        $dompdf->stream($file_name, ['Attachment' => 0]);
    } else {
        return redirect()->to('/');
    }
}
    }