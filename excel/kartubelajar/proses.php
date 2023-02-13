if(isset($_POST['submit'])){
    $file = $_FILES['file']['tmp_name'];
    $handle = fopen($file, "r");
    $c = 0; // set counter to 0
    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
    {
        $id = $filesop[0];
        $NIK = $filesop[1];
        $date = $filesop[2];
        $materi = $filesop[3];
        $pengajar = $filesop[4];

        $sql = mysqli_query($koneksi, "INSERT INTO kartubelajar(id,NIK,date,materi,pengajar) VALUES ('$id','$NIK','$date','$materi','$pengajar')");
        $c = $c + 1;
    }
    if($sql){
        echo "You database has imported successfully. You have inserted ". $c ." recoreds";
    }else{
        echo "Sorry! There is some problem.";
    }
}