<h2>Input Pengunjung</h2>

<form action="<?php echo URL; ?>/pengunjung/save" method="post">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>NAMA LENGKAP</td>
            <td><input type="text" name="full_name" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="pengunjung_alamat" required></td>
        </tr>
        <tr>
            <td>NO WA</td>
            <td><input type="text" name="pengunjung_no_wa" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>