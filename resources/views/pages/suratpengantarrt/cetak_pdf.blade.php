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

  <Style>
    table tr td {
      font-family: 'Times New Roman', Times, serif;
      font-size: 14px
    }

    .kopsurat {
      border-bottom: 3px solid black;
      padding: 2px;
    }

    .text {
      text-align: center;
      font-family: 'Times New Roman', Times, serif;
      font-size: 14px;
      text-decoration-line: underline;
    }

    .nomor {
      text-align: center;
      font-family: 'Times New Roman', Times, serif;
      font-size: 14px;
    }

    .paragraf {
      font-family: 'Times New Roman', Times, serif;
      font-size: 12px;
    }
  </Style>


</head>

<body>
  <center>

    <table class="kopsurat" width="700.95">
      <tr>
        <td>
          <center>
            <font size="4"><b> PERUMAHAN TAMAN MEDITERANIA </b></font><br>
            <font size="4"><b>RT 007 / RW 008 KELURAHAN BALOI PERMAI, BATAM KOTA </b></font><br>
            <font size="4"><b>KOTA BATAM</b></font><br>
            <font size="2"><b>Sekretariat: Blok FF5 Taman Mediterania, Kelurahan Balio Permai-Batam Kota, Kode Pos
                29463</b>
            </font>
          </center>
        </td>
      </tr>
      {{-- <tr>
        <td colspan="7">
          <hr>
        </td>
      </tr> --}}
    </table>

    <br>

    <table width="700.95">
      <tr>
        <td class="text">
          <b> SURAT KETERANGAN</b>
        </td>
      </tr>
      <tr>
        <td class="nomor">
          <b> Nomor : {{ $rt->no_surat }} </b>
        </td>
      </tr>
    </table>
    <br>

    <table width="700.95">
      <tr>
        <td>Ketua RT 007 / RW 008 Perumahan Taman Mediterania, dengan ini menerangkan
          bahwa:</td>
      </tr>
    </table>

    <br>

    <table>
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
      {{-- <tr>
        <td>4. Nama Ibu kandung</td>
        <td>: {{ $rt->warga->ibu }}</td>
      </tr>
      <tr>
        <td>5. Nama Ayah kandung</td>
        <td>: {{ $rt->warga->ayah }}</td>
      </tr> --}}
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

    <table width="700.95">
      <tr>
        <td>Adalah Benar Penduduk RT 007 / RW 008, Perumahan Taman Mediterania,
          dikelurahan Baloi
          Permai.
        </td>
      </tr>
    </table>

    <table width="700.95">
      <tr>
        <td>Surat Keterangan ini dibuat untuk keperluan : <b> {{ $rt->keperluan->keperluan }}</b></td>
        </td>
      </tr>
    </table>

    <br>

    <table width="700.95">
      <tr>
        <td>Demikian Surat Keterangan ini diberikan kepada yang bersangkutan unutk 1 (satu) kali
          pengurusan.</td>
        </td>
      </tr>
    </table>

    <br>

    <table width="700">
      <tr>
        <td>Mengetahui</td>
        <td>Batam, {{ \Carbon\Carbon::parse($rt->created_at)->format('d F Y') }}</td>
      </tr>
      <tr>
        <td>Ketua RW 008</td>
        <td>Ketua RT 007</td>
      </tr>
      <tr>
        <td height="80px"></td>
      </tr>
      <tr>
        <td>( ... )</td>
        <td>( ... )</td>
      </tr>
    </table>

  </center>




  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>
