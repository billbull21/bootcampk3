<?php

require_once "core/init.php";
//validasi
$validasi = new Validation;
//metode check
$validasi = $validasi->check([
    'nama'  =>  [
        'required'  =>  true,
        'min'       =>  3,
        'max'       =>  20
    ],
]);

//lolos
if (Input::get('submit1')) {
    if ($validasi->passed()) {
        $user->tambah(array(
            'nama' =>  Input::get('nama')
        ));
    } else {
        $errors = $validasi->errors();
    }
}

if (Input::get('submit2')) {
    $user->tambahSkill(array(
        'nama_skill' =>  Input::get('skill'),
        'user_id'    =>  Input::get('user_id')
    ));
}

$users = $user->getData();


require_once "template/header.php";
?>

<div class="container">
    <h2>Masukkan nama programmer!</h2>
    <hr />
    <?php if (!empty($errors)) { ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors as $error) { ?>
                    <li><?php echo $error ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
    <div class="container border">
        <form method="post" action="index.php" class="input-group mt-3 mb-3">
            <input type="text" class="form-control" placeholder="Masukkan nama" aria-describedby="button-addon2" name="nama" required />
            <div class="input-group-append">
                <input class="btn btn-outline-secondary" type="submit" name="submit1" id="button-addon2" value="Tambah" />
            </div>
        </form>
    </div>
    <br />
    <h2>Daftar User!</h2>
    <hr />
    <table class="table">
        <?php $i = 1;
        foreach ($users as $_user) : ?>
            <tbody>
                <tr>
                    <?php $skills = $user->getDataSkill($i); ?>
                    <td><?= $_user['nama'] . ' index ke : ' . $i; ?></td>
                    <td rowspan="2">
                        <form method="post" action="index.php" class="input-group mt-3 mb-3">
                            <input type="text" class="form-control" placeholder="Masukkan skill" aria-describedby="button-addon2" name="skill" required />
                            <input type="hidden" name="user_id" value="<?= $_user['id'] ?>" />
                            <div class="input-group-append">
                                <input class="btn btn-outline-secondary" type="submit" name="submit2" id="button-addon2" value="Tambah" required />
                            </div>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>Skills :
                        <?php if(!empty($skills)): foreach ($skills as $skill) : ?>
                            <?= $skill['nama_skill'].', ';  ?>
                        <?php endforeach; endif; ?>
                    </td>
                </tr>
            </tbody>
            <?php $i++;
        endforeach; ?>
    </table>
</div>