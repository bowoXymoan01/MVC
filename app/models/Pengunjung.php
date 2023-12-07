<?php

namespace App\Models;

use App\Core\Model;

class Pengunjung extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_pengunjung";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $email = $_POST['email'];
            $full_name = $_POST['full_name'];
            $alamat = $_POST['pengunjung_alamat'];
            $no_wa = $_POST['pengunjung_no_wa'];


            $sql = "INSERT INTO tb_pengunjung
            SET pengunjung_email=:pengunjung_email, 
            pengunjung_full_name=:pengunjung_full_name, pengunjung_alamat=:pengunjung_alamat, pengunjung_no_wa=:pengunjung_no_wa";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":pengunjung_email", $email);
            $stmt->bindParam(":pengunjung_full_name", $full_name);
            $stmt->bindParam(":pengunjung_alamat", $alamat);
            $stmt->bindParam(":pengunjung_no_wa", $no_wa);



            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_pengunjung WHERE pengunjung_id=:pengunjung_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":pengunjung_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $email = $_POST['email'];
            $full_name = $_POST['full_name'];
            $id = $_POST['id'];
            $alamat = $_POST['pengunjung_alamat'];
            $no_wa = $_POST['pengunjung_no_wa'];

            $sql = "UPDATE tb_pengunjung
            SET pengunjung_email=:pengunjung_email,
            pengunjung_full_name=:pengunjung_full_name, pengunjung_alamat=:pengunjung_alamat, pengunjung_no_wa=:pengunjung_no_wa
            WHERE pengunjung_id=:pengunjung_id";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":pengunjung_email", $email);
            $stmt->bindParam(":pengunjung_full_name", $full_name);
            $stmt->bindParam(":pengunjung_id", $id);
            $stmt->bindParam(":pengunjung_alamat", $alamat);
            $stmt->bindParam(":pengunjung_no_wa", $no_wa);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_pengunjung WHERE pengunjung_id=:pengunjung_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":pengunjung_id", $id);
            $stmt->execute();
      }
}
