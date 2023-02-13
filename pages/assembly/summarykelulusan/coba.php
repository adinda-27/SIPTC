<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modalnilai">
  Nilai Skill Proses
</button>

<!-- Modal -->
<div class="modal fade" id="Modalnilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <table border="1" cellspacing="0" cellpadding="5">
          <thead>
            <tr>
              <th rowspan="4">Item</th>
              <th rowspan="4">Materi</th>
              <th colspan="3">
                <center>Standar Line</center>
              </th>
              <th colspan="3">
                <center>Training 1 (OJT 5 day)</center>
              </th>
              <th colspan="3">
                <center>Training 2 (Week 2)</center>
              </th>
              <th colspan="3">
                <center>Training 3 (Week 3)</center>
              </th>
              <th colspan="3">
                <center>Training 4 (Week 4)</center>
              </th>
              <th rowspan="4">
                <center>Hasil Akhir</center>
              </th>
            </tr>
            <tr>
              <th rowspan="2">Defect Visual</th>
              <th rowspan="2">Tacho Speed</th>
              <th rowspan="2">Target Eficiency OJT</th>
              <th rowspan="2">Defect Visual</th>
              <th rowspan="2">Tacho Speed</th>
              <th rowspan="2">Eficiency</th>
              <th rowspan="2">Defect Visual</th>
              <th rowspan="2">Tacho Speed</th>
              <th rowspan="2">Eficiency</th>
              <th rowspan="2">Defect Visual</th>
              <th rowspan="2">Tacho Speed</th>
              <th rowspan="2">Eficiency</th>
              <th rowspan="2">Defect Visual</th>
              <th rowspan="2">Tacho Speed</th>
              <th rowspan="2">Eficiency</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include '../../../config/koneksi.php';
            $NIK = $_GET['NIK'];
            $data = mysqli_query($db, "select * from skillproses where NIK='$NIK'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
              <tr>
                <th>1</th>
                <th>Sub Assy</th>
                <td><?php echo $d['defectstandar']; ?></td>
                <td><?php echo $d['tachostandar']; ?></td>
                <th>75%</th>
                <td><?php echo $d['defectt1']; ?></td>
                <td><?php echo $d['tachot1']; ?></td>
                <td><?php echo $d['eficiencyt1']; ?></td>
                <td><?php echo $d['defectt2']; ?></td>
                <td><?php echo $d['tachot2']; ?></td>
                <td><?php echo $d['eficiencyt2']; ?></td>
                <td><?php echo $d['defectt3']; ?></td>
                <td><?php echo $d['tachot3']; ?></td>
                <td><?php echo $d['eficiencyt3']; ?></td>
                <td><?php echo $d['defectt4']; ?></td>
                <td><?php echo $d['tachot4']; ?></td>
                <td><?php echo $d['eficiencyt4']; ?></td>
                <td><?php echo $d['hasilakhir']; ?></td>
                </td>
              </tr>
<?php
              }
?>
            </tbody>
          </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>