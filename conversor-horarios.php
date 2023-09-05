

<?php
// Site que converte horas e minutos: https://www.site24x7.com/pt/tools/conversor-de-hora-carimbo.html

    print strtotime("22nd December 1979")."<br>";
    print strtotime("22 Dec. 1979 17:30")."<br>";
    print strtotime("1979/12/22");
?>
<?php
echo "<br>";
    $mydate = strtotime("Christmas 1979");
    if ($mydate == -1) {
        print "Date conversion failed!";
    } else {
        print "Date conversion succeeded!";
    }
    
?>