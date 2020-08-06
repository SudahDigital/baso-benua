<?php if (!empty($benefit)):?>
	<?php $no = 0; foreach ($benefit as $key => $value): $no++; ?>
		<tr>
			<td><?=$no?></td>
			<td><?=$value['name']?></td>
			<td><?=$value['descriptios']?></td>
			<td><i class="<?=$value['icon']?>"></i></td>
			<td>
				<a class="btn btn-sm btn-warning" title="Edit" href="<?=site_url('benefit/form/'.$value['id'])?>"><i class="fa fa-pencil"></i></a>
			 	<a class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakun mau menghapus data ini?')" title="Hapus" href="<?=site_url('benefit/delete/'.$value['id'])?>"><i class="fa fa-trash"></i></a>
			 </td>
		</tr>
	<?php endforeach; ?>
<?php else: ?>
	<tr>
		<td colspan="4">Data Kosong</td>
	</tr>
<?php endif; ?>