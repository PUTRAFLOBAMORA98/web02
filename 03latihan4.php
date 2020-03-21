<html>

<head>
    <title>Switch</title>
</head>

<body>
    Hari ini :
    <?php
    $nama_hari = date("1");
    switch ($nama_hari) {
        case "Sunday":
            print("MINGGU");
            print("Waktunya Istirahat");
            break;
        case "Monday":
            print("SENIN");
            print("Meeting awal minggu jam 08.00");
            break;
        case "Tuesday":
            print("SELASA");
            print("Pembukaan Workshop DIklat");
            break;
        case "Wednesday":
            print("Rabu");
            print("Seminar Launcing windows di JHCC");
            break;
        case "Thrusday":
            print("KAMIS");
            print("Pembukaan Workshop DIklat");
            break;
        case "Friday":
            print("JUM'AT");
            print("");
            break;
        default;
        case "Saturday":
            print("SABTU <br>");
            print("Survey Harga ke dusit, Mangga dua");
            break;
    }











    ?>



</body>

</html>