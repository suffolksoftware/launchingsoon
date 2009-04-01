<?php if ( ! empty($errors)): ?>
<ul class="errors">
<?php foreach ($errors as $key => $val) {
  if ($key == "email") {
      if ($val == "required") {
        echo '<li>Email address is required</li>';
      } else if ($val == "email") {
        echo '<li>A valid Email address is required</li>';
      } else if ($val == "email_exists") {
        echo '<li>Email address is already in our list</li>';
      }
   }
 } ?>
</ul>
<?php endif ?>

<?php echo form::open("/",  array('method'=>'post')) ?>
  <ul>
    <li>
      <?php print form::label('email', 'Email Address'); ?>
      <?php print form::input('email', $user->email); ?>
    </li>

    <?php if (!$email_only) { ?>
    <li>
      <?php print form::label('first_name', 'First Name'); ?>
      <?php print form::input('first_name', ''); ?>
    </li>

    <li>
      <?php print form::label('last_name', 'Last Name'); ?>
      <?php print form::input('last_name', ''); ?>
    </li>
    <?php } ?>
  </ul>
  
  <p><input type="submit" id="submit" value="Send"></p>
<?php echo form::close() ?>