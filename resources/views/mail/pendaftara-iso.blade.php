<!DOCTYPE html>
<html>

<head>
    <title>{{ $details->nama_perusahaan }} - {{ $details->standar_sertifikasi }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <table class="table table-hover table-borderless table-sm table-inverse table-nowrap">
        <tbody>
            <tr>
                <td scope="row">Standar Sertifikasi</td>
                <td>:</td>
                <td>{{ $->details->standar_sertifikasi }}</td>
            </tr>
            <tr>
                <td scope="row">Status Permohonan</td>
                <td>:</td>
                <td>{{ $->details->status_permohonan }}</td>
            </tr>
            <tr>
                <td scope="row">Nama Perusahaan</td>
                <td>:</td>
                <td>{{ $->details->nama_perusahaan }}</td>
            </tr>
            <tr>
                <td scope="row">Alamat Perusahaan</td>
                <td>:</td>
                <td>{{ $->details->alamat_perusahaan }}</td>
            </tr>
            <tr>
                <td scope="row">Telepon</td>
                <td>:</td>
                <td>{{ $->details->telepon }}</td>
            </tr>
            <tr>
                <td scope="row">Email</td>
                <td>:</td>
                <td>{{ $->details->email }}</td>
            </tr>
            <tr>
                <td scope="row">Jumlah Karyawan</td>
                <td>:</td>
                <td>{{ $->details->jumlah_karyawan }}</td>
            </tr>
            <tr>
                <td scope="row">Jumlah Divisi</td>
                <td>:</td>
                <td>{{ $->details->jumlah_divisi }}</td>
            </tr>
            <tr>
                <td scope="row">Jumlah Sift</td>
                <td>:</td>
                <td>{{ $->details->jumlah_sift }}</td>
            </tr>
            <tr>
                <td scope="row">Ruang Lingkup</td>
                <td>:</td>
                <td>{{ $->details->ruang_lingkup }}</td>
            </tr>
            <tr>
                <td scope="row">Nama Perwakilan</td>
                <td>:</td>
                <td>{{ $->details->nama_perwakilan }}</td>
            </tr>

            <tr>
                <td scope="row">Jabatan</td>
                <td>:</td>
                <td>{{ $->details->jabatan }}</td>
            </tr>

            <tr>
                <td scope="row">Telepon Perwakilan</td>
                <td>:</td>
                <td>{{ $->details->telepon_perwakilan }}</td>
            </tr>

            <tr>
                <td scope="row">Email Perwakilan</td>
                <td>:</td>
                <td>{{ $->details->bidang_usaha }}</td>
            </tr>

        </tbody>
    </table>
</body>

</html>
