<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 9px;
    text-align: left;    
}
</style>
    <?php 

for($i=3;$i<=100;$i=$i+3) 
    echo " <center>
    <table style='width:5%'><tr>
            <td>$i</td>
        </tr>
    </table></center>"; 
?>