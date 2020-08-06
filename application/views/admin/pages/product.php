<?php if (!empty($product)):?>
	<?php $no = 0; foreach ($product as $key => $value): $no++; ?>
		<tr>
			<td><?=$no?></td>
			<td><img width="100" height="75" src="<?=base_url().$value['image']?>"></td>
			<td><?=$value['name']?></td>
			<td><?=$value['description']?></td>
			<td><?=number_format($value['harga'])?></td>
			<td>
				<a class="btn btn-sm btn-warning" title="Edit" href="<?=site_url('product/form/'.$value['id'])?>"><i class="fa fa-pencil"></i></a>
			 	<a class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakun mau menghapus data ini?')" title="Hapus" href="<?=site_url('product/delete/'.$value['id'].'/'.$value['image'])?>"><i class="fa fa-trash"></i></a>
			 </td>
		</tr>
	<?php endforeach; ?>
<?php else: ?>
	<tr>
		<td colspan="6">Data Kosong</td>
	</tr>
<?php endif; ?>