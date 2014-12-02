<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
$bocksone = 0;
$bocksfieldlist = Array('title','body','view_node');
?>
<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>

<?php
if(in_array($id,$bocksfieldlist,TRUE)){
  if ($bocksone==0) { echo '<div id="floatingbocks">'; $bocksone++; }
}

// if the id is field_background_image then.... 
?>

  <?php print $field->wrapper_prefix; ?>
    <?php print $field->label_html; ?>

<?php
    $teststring = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae ';
    if($id=='body'){
    // partial or broken tags can have unexpected results. This view is presently showing this field in plantext.
	$originalcontent = $field->content;
	$lengthoriginal = strlen(strip_tags($originalcontent));
	$lengthmax = strlen($teststring);
	$trimmedcontent = substr($originalcontent,0,$lengthmax).' ...';
	print $trimmedcontent;
    }else{
	print $field->content;
    }
?>

<?php
if(in_array($id,$bocksfieldlist,TRUE)){
  if ($bocksone==2) { 
    echo $holdingwrapper;
    echo '</div>'; 
  }
}else{
  if($id=='field_background_image'){
    $holdingwrapper = $field->wrapper_suffix;
  }else{
    print $field->wrapper_suffix;
  }
}

?>

<?php endforeach; ?>
