<?php
print_r($_POST);
echo("\n\n");
echo <<<ISIFORM
<table>
    <caption>ISI FORMULIR</caption>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td>{$_POST['ffullname']}</td>
    </tr>
    <tr>
        <td>No. HP</td>
        <td>:</td>
        <td>{$_POST['fcontactinfo']}</td>
    </tr>
    <tr>
        <td>Line ID</td>
        <td>:</td>
        <td>{$_POST['flineid']}</td>
    </tr>
    <tr>
        <td>Date of Birth</td>
        <td>:</td>
        <td>{$_POST['fdateofbirth']}</td>
    </tr>
    <tr>
        <td>Jenis kelamin</td>
        <td>:</td>
        <td>{$_POST['fgender']}</td>
    </tr>
    <tr>
        <td>Pilihan Bintang</td>
        <td>:</td>
        <td>{$_POST['fstars']}</td>
    </tr>
    <tr>
        <td>Agreement</td>
        <td>:</td>
        <td>{$_POST['fpersonalinfo']}</td>
    </tr>
</table>
ISIFORM;
?>