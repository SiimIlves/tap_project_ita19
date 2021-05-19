<?php require_once APPROOT.'/views/inc/header.php' ?>
<h1>Detailne info</h1>
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
            <th scope="col">detailne info</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"><?php echo $data['partner']->partner_id;?></th>
            <td><?php echo $data['partner']->name;?></td>
            <td><?php echo $data['partner']->registry;?></td>
            <td><?php echo $data['partner']->email;?></td>
            <td><?php echo $data['partner']->phone;?></td>
            <td><?php echo $data['partner']->activity;?></td>
            <td><?php echo $data['partner']->location;?></td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
<?php require_once APPROOT.'/views/inc/footer.php' ?>