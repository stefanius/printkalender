<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<?php
foreach($Model->schema() as $key=>$value){
    if($key !== 'modified' && $key !== 'created'){
        if($value['type']==='text'){
            if(array_key_exists($Model->name, $this->request->data)){
                echo $this->Fck->ckedit($Model->name.'.'.$key,  $this->request->data[$Model->name][$key]);
            }else{
                echo $this->Fck->ckedit($Model->name.'.'.$key);
            }
            
        }else{
            if(array_key_exists($key, $fieldSettings)){
                echo $this->Form->input($key, $fieldSettings[$key] );
            }else{
                echo $this->Form->input($key );
            }                          
        }
    }
}
?>

<script>
    function countChar(val, maxChars) {
        var len = val.value.length;
        if (len >= maxChars) {
            val.value = val.value.substring(0, maxChars);
        } else {
            var defaultText =  $("label[for='"+ $(val).attr("id")+"']").text();
            var splitted = defaultText.split('-');

            $("label[for='"+ $(val).attr("id")+"']").text(splitted[0] + " - " +(   maxChars - len -1) + " karakters over.");
        }
    };
</script>