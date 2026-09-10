<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
        <form action="orangtua">
        <table  border=1 align=center >
            <tr>
                <td align="center"  colspan="3">
                    {{$judul}}
                </td>
            </tr>
            <tr>
                <td>Nama: </td>
                <td>{{ $nama }} </td>
                <td rowspan="7"><img src="images/WhatsApp Image 2026-09-08 at 10.55.14.jpeg" align="center" width="150" height="200"></td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir: </td>
                <td>{{ $tl }}</td>
            </tr>
            <tr>
                <td>NIP: </td>
                <td>{{ $nim }}</td>
            </tr>
            <tr>
                <td>Program Studi: </td>
                <td>{{  $prodi }}</td>
            </tr>
            <tr>
                <td>Jurusan: </td>
                <td>{{ $jurusan }}</td>
            </tr>
            <tr>
                <td>Alamat: </td>
                <td>{{  $alamat }}</td>
            </tr>
            <tr>
                <td>No. Telp: </td>
                <td>{{  $hp }}</td>
            </tr>
        </table>
        <input type="button" value="orangtua">
        </form>
        <form action="sekolah" >
            <input type="button" value="sekolah">
        </form>
</div>
