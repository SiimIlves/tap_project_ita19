<?php require_once APPROOT.'/views/inc/header.php' ?>
<h1><?php echo $data['title']; ?></h1>
<!-- table -->
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nimi</th>
            <th scope="col">Registri kood</th>
            <th scope="col">e-post</th>
            <th scope="col">telefon</th>
            <th scope="col">tegevusala</th>
            <th scope="col">tegevusala täpsemalt</th>
            <th scope="col">asukoht</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark Otto</td>
            <td>69420</td>
            <td>Mark@Otto.com</td>
            <td>54302584</td>
            <td>seinad</td>
            <td>kipsseinad</td>
            <td>üle Eesti</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Mark Otto</td>
            <td>69420</td>
            <td>Mark@Otto.com</td>
            <td>54302584</td>
            <td>seinad</td>
            <td>puitseinad</td>
            <td>üle Eesti</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Margaret Otto</td>
            <td>69420</td>
            <td>info@hamilton.com</td>
            <td>54302584</td>
            <td>aknad</td>
            <td>puitaknad</td>
            <td>Tartumaa</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>John Smith</td>
            <td>69420</td>
            <td>John@Clark.com</td>
            <td>54302584</td>
            <td>aknad</td>
            <td>plastaknad</td>
            <td>Võrumaa</td>
        </tr>
        </tbody>
    </table>
<?php require_once APPROOT.'/views/inc/footer.php' ?>