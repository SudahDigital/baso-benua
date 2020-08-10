<?php
function formbuilder($field, $value=array())
{
    // if (!empty($value)) {
    //    # code...
    //   $value = json_decode($value,true);
    //  }
    // return var_dump($value,true); 
    $data = '';
    foreach ($field as $k => $v) {
        # code...
        switch ($v['type']) {
            case 'HIDDEN':
                $data .='<input type="hidden" name="'.$v['name'].'" value="'.(empty($value[$v['name']]) ? '' : $value[$v['name']]).'">';
                break;
            case 'PASSWORD':
                $data .='<div class="form-group '.$v['col'].'">';
                $data .='<label>'.$v['label'].'<small style="color:red;"><b> *Kosongkan jika tidak ingin merubah password*</b></small></label>';
                $data .='<input type="password" name="'.$v['name'].'" class="form-control" placeholder="'.$v['label'].'" value="">';
               $data .='</div>';
                break;
            case 'NUMBER':
                $data .='<div class="form-group '.$v['col'].'">';
                $data .='<label>'.$v['label'].'</label>';
                $data .='<input type="number" name="'.$v['name'].'" class="form-control" placeholder="'.$v['label'].'" value="'.(empty($value) ? '' : $value[$v['name']]).'">';
               $data .='</div>';
                break;
            case 'FILE':
                $data .='<div class="form-group '.$v['col'].'">';
                $data .='<label>'.$v['label'].'</label>';
                $data .='<input type="file" name="'.$v['name'].'" class="form-control" placeholder="'.$v['label'].'" value="'.(empty($value) ? '' : $value[$v['name']]).'">';
               $data .='</div>';
                break;
            case 'TEXTAREA':
                $data .='<div class="form-group '.$v['col'].'">';
                $data .='<label>'.$v['label'].'</label>';
                $data .='<textarea rows="'.(empty($v['row']) ? '5' : $value['row']).'" name="'.$v['name'].'" class="form-control" placeholder="'.$v['label'].'">'.(empty($value) ? '' : $value[$v['name']]).'</textarea>';
               $data .='</div>';
                break;
            case 'select':
                $data .='<div class="form-group '.$v['col'].'">';
                $data .='<label>'.$v['label'].'</label>';
                $data .='<select name="'.$v['name'].'" class="form-control">';
                $data .='<option value="">Pilih '.$v['label'].'</option>';
                foreach ($v['option'] as $kunci => $option) {
                $data .='<option value="'.$option[$v['key_value']].'">'.$option[$v['key_label']].'</option>';
                }
                $data .='</select>';
               $data .='</div>';
                break;
            case 'CHECKBOX':
               $data .='<div class="form-group '.$v['col'].'">';
               $data .='<label>'.$v['label'].'</label>';
               foreach ($v['option'] as $kunci => $option) {
               $data .='<div class="checkbox">';
               $data .='<label class="">';
               $data .='<div class="icheckbox_flat-green checked" style="position: relative;">';
               $data .='<input type="checkbox" class="flat" name="'.$v['name'].'" value="'.$option['value'].'" style="position: absolute; opacity: 0;">';
               $data .='<ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>';
               $data .='</div> '.$option['label'];
               $data .='</label>';
               $data .='</div>';
               }
               $data .='</div>';
               break;
            case 'RADIO':

               $data .='<div class="form-group '.$v['col'].'">';
               $data .='<label>'.$v['label'].'</label>';
               $data .='<div class="row">';
               foreach ($v['option'] as $kunci => $option) {
                // echo $v['name'];
                $data .= '<div class="'.$v['col'].'">';
                $data .= '<input type="radio" name="'.$v['name'].'" value="'.$option[$v['key_value']].'" >&nbsp;'.$option[$v['key_label']];
                $data .= '</div>';
                }
                $data .='</div>';
                $data .='</div>';
                # code...
                break;
            case 'BUTTON':
                if ($v['type_button']='add_row') {
                  # code...
                  $data .='<div id="'.$v['id_after_click'].'"></div>';
                }
                $data .='<div class="form-group '.$v['col'].'">';
                $data .='<button type="button" class="'.$v['class'].'" id="'.$v['id'].'"><i class="'.$v['icon'].'"></i> '.$v['label'].'</button>';
                $data .= '</div>';
              # code...
              break;
            case 'array';
                # code...
                $data .='<div class="form-group '.$v['col'].'">';
                $data .='<label>'.$v['label'].'</label>';
                // $data .='<input type="text" class="form-control">';
                $data .='<input type="text"  name="'.$v['name'].'[]" class="form-control" placeholder="'.$v['label'].'" value="'.(empty($value) ? '' : $value[$v['name']]).'">';
                $data .='</div>';
                break;
            default:
                # code...
                $data .='<div class="form-group '.$v['col'].'">';
                $data .='<label>'.$v['label'].'</label>';
                // $data .='<input type="text" class="form-control">';
                $data .='<input type="text"  name="'.$v['name'].'" class="form-control" placeholder="'.$v['label'].'" value="'.(empty($value) ? '' : $value[$v['name']]).'">';
                $data .='</div>';
                break;
        }
    }
    // print_r($data);
    return $data;
}

 function tablebuilder($field)
 {
    $data ='';
    foreach ($field as $key => $value) {
      # code...
      if ($value['type']!='HIDDEN') {
        # code...
        $data .='<th>'.$value['label'].'</th>';
      }
    }
    return $data;
 }
