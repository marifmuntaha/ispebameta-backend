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
            @if($user->logo)
                <td style="width: auto"><img src="{{public_path('storage/images/'. $user->logo)}}" alt="logo" width="70px"/> </td>
            @endif
            <td style="text-align: center; width: 100%">
                <span style="font-size: 20px; font-weight: bold">{{$user->foundation}}</span>
                <br/>
                <span style="font-size: 20px; font-weight: bold">{{$user->institution}}</span>
                <br/>
                <span>{{$user->address}}</span>
            </td>
        </tr>
    </table>
    <hr/>
    <div style="text-align: center">
        <span style="font-size: 16px; font-weight: bold">INSTRUMEN SUPERVISI AKADEMIK TAHUN 2024</span>
        <br/>
        <span style="font-size: 16px; font-weight: bold">{{$aspect->name}} DI MADRASAH</span>
        <br/>
    </div>
    <br/>
    <table class="table-title">
        <tr>
            <td style="width: auto">Nama Guru</td>
            <td>:</td>
            <td style="width: auto">{{$teacher->name}}</td>
        </tr>
        <tr>
            <td style="width: auto">Mata Pelajaran</td>
            <td style="width: auto">:</td>
            <td style="width: auto">{{$teacher->subject}}</td>
        </tr>
        <tr>
            <td style="width: auto">Nama Madrasah</td>
            <td style="width: auto">:</td>
            <td style="width: auto">{{$user->institution}}</td>
        </tr>
    </table>
    <br/>
    <table class="table-content">
        <tr>
            <td style="text-align: center; font-weight: bold; padding: 5px">No</td>
            <td style="text-align: center; font-weight: bold; padding: 5px">Aspek Yang Diamati</td>
            <td style="text-align: center; font-weight: bold; padding: 5px">Hasil Pengamatan</td>
            <td style="text-align: center; font-weight: bold; padding: 5px">Rekomendasi</td>
        </tr>
        @php($no = 1)
        @foreach($result as $item)
            @php($instrument = \App\Models\Instrument::find($item->indicator->instrument))
            @if($instrument->sub != '')
                <tr>
                    <td style="text-align: center; padding: 5px">{{$no++}}</td>
                    <td style="text-align: center; padding: 3px">{{$instrument->desc}} : {{$instrument->subdesc}}</td>
                    <td style="text-align: center; padding: 3px">{{$item->indicator->desc}}</td>
                    <td style="text-align: center; padding: 3px">{{$item->indicator->reference}}</td>
                </tr>
            @else
                <tr>
                    <td style="text-align: center; padding: 5px">{{$no++}}</td>
                    <td style="text-align: center; padding: 3px">{{$instrument->desc}}</td>
                    <td style="text-align: center; padding: 3px">{{$item->indicator->desc}}</td>
                    <td style="text-align: center; padding: 3px">{{$item->indicator->reference}}</td>
                </tr>
            @endif
        @endforeach
    </table>
    <br/>
    <table class="table-feedback">
        <tr>
            <td style="font-weight: bold; padding: 5px">TINDAK LANJUT HASIL SUPERVISI</td>
        </tr>
        <tr>
            <td style="padding: 10px; text-align: justify">{{$feedback}}</td>
        </tr>
    </table>
    <br/>
    <table class="table-signature">
        <tr>
            <td></td>
            <td>Jepara, {{$date}}</td>
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
            <td>{{$teacher->name}}</td>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <td>{{$teacher->nip}}</td>
            <td>{{$user->nip}}</td>
        </tr>
    </table>
</div>
</body>
</html>
