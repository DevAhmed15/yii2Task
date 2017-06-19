<?php
use yii\helpers\Html;
?>
 
<style>
table th,td{
    padding: 10px;
}
</style>
 
<?= Html::a('Create', ['users/create'], ['class' => 'btn btn-success']); ?>
 
<table border="1">
    <tr>
        <th>Full_name</th>
        <th>email</th>
        <th>Mobile</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    <?php foreach($model as $field){ ?>
    <tr>
        <td><?= $field->name; ?></td>
        <td><?= $field->email; ?></td>
        <td><?= $field->mobile; ?></td>
        <td><?= $field->password; ?></td>
        <td><?= Html::a("Edit", ['users/edit', 'id' => $field->id]); ?> | <?= Html::a("Delete", ['users/delete', 'id' => $field->id]); ?></td>
    </tr>
    <?php } ?>
</table>