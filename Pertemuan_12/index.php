<h3> 2. PHP dengan HTML (proses deklarasi text hello word pada halaman HTML) </h3> 

<!DOCTYPE html>
<html>
<body>

    <?php echo"Hello PPW" ?>

</body>
</html>

<br/>





<?php
echo "<h3> 1. Ouput dengan PHP (proses deklarasi text hello word) </h3>" ;
echo "Hello World" ;



echo "<h3> 3. Komentar pada PHP (Memberikan komentar pada code PHP) </h3> ";

    // This is a single-line comment
    
    # This is also a single-line comment
    /*
    This is a multiple-lines comment block
    that spans over multiple
    lines
    */
    
    // You can also use comments to leave out parts of a code line
    $x= 5 /* + 15 */ + 5;
    echo $x;
    




echo "<h3> 4. PHP Case Sensitive </h3> ";
    $color = "red";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";
    




echo "<h3> 5. Deklarasi Variabel </h3> ";

    $txt = "Hello world!";
    $x= 5;
    $y = 10.5;





echo "<h3> 6. Output Variabel 1 </h3> ";

    $txt = "PPW1";
    echo "I love $txt!";
    




echo "<h3> 7. Output Variabel 2 </h3> ";

    $txt = "PPW1";
    echo "I love " . $txt . "!";
    




echo "<h3> 8. Output Variabel 3 </h3> ";

    $x= 5;
    $y = 4;
    echo $x + $y;
    




echo "<h3> 9. Mengetahui panjang string </h3> ";

    echo strlen("Hello world!"); // outputs 12
    




echo "<h3> 10. Menghitung jumlah kata pada kalimat </h3> ";

    echo str_word_count("Hello world!"); // outputs 2
    




echo "<h3> 11. Membalikan string </h3> ";

    echo strrev("Hello world!"); // outputs !dlrow olleH 
    




echo "<h3> 12. Pencarian dalam string </h3> ";

    echo strpos( "Hello world!", "world"); // outputs 6
    




echo "<h3> 13. Mengganti teks </h3> ";

    echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!





echo "<h3> 14. Fungsi </h3> ";

    function writeMsg() {
        echo "Hello world!";
    }
    
    writeMsg( ); // call the function
    




echo "<h3> 15. Fungsi dengan argumen </h3> ";

    function familyNames( $fname) {
        echo "$fname Jaeger.<br>";
        }
        
        familyNames("Jani");
        familyNames("Hege");
        familyNames("Stale");
        familyNames("Kai Jim");
        familyNames("Borge");
    
        


echo "<h3> 16. Fungsi dengan lebih dari satu argumen </h3> ";

    function familyName($fname, $year) {
        echo "$fname Jaeger. Born in $year <br>";
    }
    
    familyName("Hege", "1975");
    familyName("Stale", "1978");
    familyName("Kai Jim", "1983");
    




echo "<h3> 17. Fungsi dengan nilai default pada argument </h3> ";

    function setHeight($minheight =50) {
        echo "The height is : $minheight <br>";
    }
    
    setHeight(350);
    setHeight(); // will use the default value of 50
    setHeight(135);
    setHeight(80);
    




echo "<h3> 18. Fungsi dengan pengembalian nilai </h3> ";

    function sum($x, $y) {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4);

?>
