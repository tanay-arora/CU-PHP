<html>
    <body>
        <table border="1">
            <tr>
                <th> Serial number</th>
 <th> Name</th>
 <th> Age </th>
 <th> Update </th>
 <th> Delete </th>
</tr>
<?php foreach($u as $user): ?>
    <tr>
             <td><?php echo $user['id']; ?></td>
             <td><?php echo $user['Name']; ?></td>
             <td><?php echo $user['age'];?></td>
             <td> <a href="<?php echo base_url('update');?>">Update</a></td>
             <td> <a href="">Delete</a></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>
