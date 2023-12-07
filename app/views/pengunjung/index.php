<h2>Pengunjung</h2>

<a href="<?php echo URL; ?>/pengunjung/input" class="btn">Input Pengunjung</a>

<table>
      <tr>
            <th>NO</th>
            <th>EMAIL</th>
            <th>NAMA LENGKAP</th>
            <th>ALAMAT</th>
            <th>NO_WA</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['pengunjung_email']; ?></td>
                  <td><?php echo $row['pengunjung_full_name']; ?></td>
                  <td><?php echo $row['pengunjung_alamat']; ?></td>
                  <td><?php echo $row['pengunjung_no_wa']; ?></td>
                  <td><a href="<?php echo URL; ?>/pengunjung/edit/<?php echo $row['pengunjung_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/pengunjung/delete/<?php echo $row['pengunjung_id']; ?>"
                  class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>