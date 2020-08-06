<?php if (!empty($user)):?>
	<?php $no = 0; foreach ($user as $key => $value): $no++; ?>
		<tr>
			<td><?=$no?></td>
			<td><?=$value['username']?></td>
			<td><?=$value['name']?></td>
			<td><?=$value['level']?></td>
			<td>
				<a class="btn btn-sm btn-warning" title="Edit" href="<?=site_url('user/form/'.$value['id'])?>"><i class="fa fa-pencil"></i></a>
			 	<a class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakun mau menghapus data ini?')" title="Hapus" href="<?=site_url('user/delete/'.$value['id'])?>"><i class="fa fa-trash"></i></a>
			 </td>
		</tr>
	<?php endforeach; ?>
<?php else: ?>
	<tr>
		<td colspan="4">Data Kosong</td>
	</tr>
<?php endif; ?>