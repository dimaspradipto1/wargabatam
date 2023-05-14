<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Surat Pengantar RT</title>

  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .table-bordered {
      margin-top: 8px;
      border-spacing: 0px;
      border-collapse: collapse;
      width: 100%;
      max-width: 100%;
      margin-bottom: 15px;
      background-color: transparent;
      text-align: left;
    }

    .table-bordered th {
      font-weight: bold;
      border: 1px solid #cccccc;
      padding: 8px;
      text-align: center;
    }

    .table-bordered td {
      border: 1px solid #cccccc;
      padding: 8px;
    }


    #header,
    #nav,
    .noprint {
      display: none;
    }


    .kopsurat {
      border-bottom: 3px solid black;
      padding: 2px;
    }

    @media only screen and (min-width: 768px) {
      .container {
        width: 750px;
      }
    }

    @media only screen and (min-width: 992px) {
      .container {
        width: 970px;
      }
    }

    @media only screen and (min-width: 1200px) {
      .container {
        width: 1170px;
      }
    }

    @media print {
      body {
        -webkit-print-color-adjust: exact;
      }
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg" style="background-color: #eaeaea;">
    <div class="container">
      <a class="navbar-brand" href="#">Surat Pengantar RT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <button class="btn btn-small btn-primary me-2" onclick="printDOM()" id="btn-print">
            <i class="mdi mdi-printer me-1"></i>Print
          </button>
          <a class="btn btn-small btn-warning text-white" href="{{ route('suratpengantarrt.index') }}">
            <i class="mdi mdi-keyboard-backspace"></i> Back
          </a>
        </div>
      </div>
    </div>

  </nav>

  <div style="text-align: center; text-align: -webkit-center; margin-top: 32px;" id="cetakSurat">
    <div style="width: 900px; margin: auto; text-align:left;">
      <div style="text-align: center">

        <table class="kopsurat" width="100%">
          <tr>
            <td>
              <center class="pb-2">
                <font size="4"><b> PERUMAHAN TAMAN MEDITERANIA </b></font><br>
                <font size="4"><b>RT 007 / RW 008 KELURAHAN BALOI PERMAI, BATAM KOTA </b></font><br>
                <font size="4"><b>KOTA BATAM</b></font><br>
                <font size="2"><b>Sekretariat: Blok FF5 Taman Mediterania, Kelurahan Balio Permai-Batam Kota, Kode
                    Pos
                    29463</b>
                </font>
              </center>
            </td>
          </tr>
        </table>

        <br>

        <table width="100%">
          <tr>
            <td class="text text-center">
              <b> SURAT KETERANGAN</b>
            </td>
          </tr>
          <tr>
            <td class="nomor text-center">
              <b> Nomor : {{ $rt->no_surat }} </b>
            </td>
          </tr>
        </table>
        <br>

        <table width="100%">
          <tr>
            <td>Ketua RT 007 / RW 008 Perumahan Taman Mediterania, dengan ini menerangkan
              bahwa:</td>
          </tr>
        </table>

        <br>

        <table width="90%">
          <tr>
            <td>1. Nama Legkap</td>
            <td width="550">: {{ $rt->warga_nama }}</td>
          </tr>
          <tr>
            <td>2. Jenis Kelamin</td>
            <td>: {{ $rt->warga->jenis_kelamin }}</td>
          </tr>
          <tr>
            <td>3. Tempat/Tanggal Lahir</td>
            <td>:
              {{ $rt->warga->tempat_lahir }}, {{ \Carbon\Carbon::parse($rt->warga->tanggal_lahir)->format('d F Y') }}
            </td>
          </tr>
          <tr>
            <td>4. Alamat Sekarang</td>
            <td>: {{ $rt->warga->alamat }}</td>
          </tr>
          <tr>
            <td>5. Kewarganegaraan</td>
            <td>: {{ $rt->warga->kewarganegaraan }}</td>
          </tr>
          <tr>
            <td>6. Agama</td>
            <td>: {{ $rt->warga->agama }}</td>
          </tr>
          <tr>
            <td>7. Pendidikan Terakhir</td>
            <td>: {{ $rt->warga->pendidikan->pendidikan }}</td>
          </tr>
          <tr>
            <td>8. Pekerjaan</td>
            <td>: {{ $rt->warga->pekerjaan->pekerjaan }}</td>
          </tr>
          <tr>
            <td>9. Status Perkawinan</td>
            <td>: {{ $rt->warga->status_perkawinan }}</td>
          </tr>
          <tr>
            <td>10. No KTP/SIM/Passport</td>
            <td>: {{ $rt->warga->nik }}</td>
          </tr>
          {{-- <tr>
        <td>13. No Kartu Keluarga</td>
        <td>: {{ $rt->kartukeluarga->no_kk }}</td>
      </tr> --}}
        </table>

        <br>

        <table width="100%">
          <tr>
            <td>Adalah Benar Penduduk RT 007 / RW 008, Perumahan Taman Mediterania,
              dikelurahan Baloi
              Permai.
            </td>
          </tr>
        </table>

        <table width="100%">
          <tr>
            <td>Surat Keterangan ini dibuat untuk keperluan : <b> {{ $rt->keperluan->keperluan }}</b></td>
            </td>
          </tr>
        </table>

        <br>

        <table width="100%">
          <tr>
            <td>Demikian Surat Keterangan ini diberikan kepada yang bersangkutan untuk 1 (satu) kali
              pengurusan.</td>
            </td>
          </tr>
        </table>

        <br>

        <table style="margin-top: 48px; width: 100%">
          <tbody>
            <tr>
              <td rowspan="6">
                Mengetahui
                <br>
                Ketua RW 008
                <p style="margin-top: 96px">({{ $rt->nama_rw }})</p>

              </td>


              <td class="text-start">
                Batam, {{ \Carbon\Carbon::parse($rt->created_at)->format('d F Y') }}
                <br>
                Ketua RT 007
                <p style="margin-top: 96px">({{ $rt->nama_rt }})</p>
              </td>
            </tr>
          </tbody>

        </table>

      </div>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    function printDOM() {
      var printContents = document.getElementById('cetakSurat').innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
    }
  </script>

</body>

</html>
