<?php if (!empty($fitur)):?>
	<?php $no = 0; foreach ($fitur as $key => $value): $no++; ?>
		<tr>
			<td><?=$no?></td>
			<td><?=$value['fitur']?></td>
			<td>
				<a class="btn btn-sm btn-warning" title="Edit" href="<?=site_url('fitur/form/'.$value['id'])?>"><i class="fa fa-pencil"></i></a>
			 	<a class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakun mau menghapus data ini?')" title="Hapus" href="<?=site_url('fitur/delete/'.$value['id'])?>"><i class="fa fa-trash"></i></a>
			 </td>
		</tr>
	<?php endforeach; ?>
<?php else: ?>
	<tr>
		<td colspan="4">Data Kosong</td>
	</tr>
<?php endif; ?>