<?php
/**
 * @file views-view-fields.tpl.php
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
?>
<div class="col-md-4 col-sm-6 card-member card">
   <h2 class="card-title"><?php print $fields['current_employer']->content; ?></h2>

   <div class="card-content">
     <div><?php print $fields['first_name']->content; ?> <?php print $fields['last_name']->content; ?></div>
     <div><?php print $fields['job_title']->content; ?></div>
     <div><?php print $fields['street_address']->content; ?></div>
     <div><?php print $fields['city']->content; ?>, <?php print $fields['state_province']->content; ?> <?php print $fields['postal_code']->content; ?></div>

     <div class="member-phone"><?php print $fields['phone']->content; ?></div>
     <div class="member-fax"><?php print $fields['phone_1']->content; ?></div>

   </div>
 </div>
