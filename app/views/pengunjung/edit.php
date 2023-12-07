<h2>Edit Pengunjung</h2>

<form action="<?php echo URL; ?>/pengunjung/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['pengunjung_id']; ?>">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="email" value="<?php echo $data['row']['pengunjung_email']; ?>" required></td>
        </tr>
        <tr>
            <td>NAMA LENGKAP</td>
            <td><input type="text" name="full_name" value="<?php echo $data['row']['pengunjung_full_name']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="pengunjung_alamat" value="<?php echo $data['row']['pengunjung_alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>NO WA</td>
            <td><input type="text" name="pengunjung_no_wa" value="<?php echo $data['row']['pengunjung_no_wa']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>