<!DOCTYPE html>
<html lang="id">
<head>
    <title>MEMBUAT CETAK PRINT LAPORAN DENGAN PHP</title>
    <style>
        .table-header, .table-header > th, .table-header > td {
            width: 100%;
        }
        .table-title, .table-title > th, .table-title > td {
            width: auto;
        }
        .table-content {
            width: 100%;
            border-collapse: collapse;
        }
        .table-content tr td{
            border: 1px solid black;
        }
        .table-feedback {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        .table-feedback tr td{
            border: 1px solid black;
        }
        .table-signature {
            width: 70%;
            border-collapse: collapse;
            margin-left: 15%;
            margin-right: 15%;
            text-align: left;
        }
    </style>
</head>
<body>
<div>
    <table class="table-header">
        <tr>
            <td style="width: auto"><img src="{{public_path('storage/images/logo.png')}}" alt="logo" width="70px"/> </td>
            <td style="text-align: center; width: 100%">
                <span style="font-size: 20px; font-weight: bold">KEMENTERIAN AGAMA REPUBLIK INDONESIA</span>
                <br/>
                <span style="font-size: 20px; font-weight: bold">KEMENTERIAN AGAMA KABUPATEN JEPARA</span>
                <br/>
                <span>Jl. Bhayangkara Baru Nomor 8A Demak Faks/Telp.  (0291) 685260 </span>
            </td>
        </tr>
    </table>
    <hr/>
    <div style="text-align: center">
        <span style="font-size: 16px; font-weight: bold">INSTRUMEN SUPERVISI AKADEMIK TAHUN</span>
        <br/>
        <span style="font-size: 16px; font-weight: bold">PERENCANAAN PEMBELAJARAN DI MADRASAH</span>
        <br/>
    </div>
    <br/>
    <table class="table-title">
        <tr>
            <td style="width: auto">Nama Guru</td>
            <td>:</td>
            <td style="width: auto">Eka Maftukhatul Khoeryah</td>
        </tr>
        <tr>
            <td style="width: auto">Tugas Tambahan</td>
            <td style="width: auto">:</td>
            <td style="width: auto">Wali Kelas</td>
        </tr>
        <tr>
            <td style="width: auto">Mata Pelajaran</td>
            <td style="width: auto">:</td>
            <td style="width: auto">Geografi</td>
        </tr>
        <tr>
            <td style="width: auto">Nama Madrasah</td>
            <td style="width: auto">:</td>
            <td style="width: auto">MTS. Darul Hikmah Menganti</td>
        </tr>
    </table>
    <br/>
    <table class="table-content">
        <tr>
            <td>No</td>
            <td>Aspek Yang Diamati</td>
            <td>Hasil Pengamatan</td>
            <td>Rekomendasi</td>
        </tr>
        <tr>
            <td>No</td>
            <td>Aspek Yang Diamati</td>
            <td>Hasil Pengamatan</td>
            <td>Rekomendasi</td>
        </tr>
    </table>
    <br/>
    <table class="table-feedback">
        <tr>
            <td style="font-weight: bold">TINDAK LANJUT HASIL SUPERVISI</td>
        </tr>
        <tr>
            <td>asda asda asd asda asd asdfas hgfhfg sdfsadfsdf sdfsdfsNo</td>
        </tr>
    </table>
    <br/>
    <table class="table-signature">
        <tr>
            <td></td>
            <td>Jepara</td>
        </tr>
        <tr>
            <td>Guru Yang Disupervisi</td>
            <td>Kepala Madrasah</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Eka Maftukhatul Khoeryah, S.Pd.</td>
            <td>Sholihin, S.Ag.</td>
        </tr>
        <tr>
            <td>NIP/NPK</td>
            <td>NIP/NPK</td>
        </tr>
    </table>
</div>
</body>
</html>
