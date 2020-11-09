

<h1 class="welcome" style="padding: 30px 0">Welcome to First problem!</h1>

<?php
  $ses->testvar = "Session variable";
?>

<?php
  echo $this->sample->checkModel();
?>

<div ng-app="">
  <p>Name : <input type="text" ng-model="name"></p>
  <h1>Hello {{name}}</h1>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    console.log("this is working");
    $('.welcome').hide().slideDown(5000);
  });
</script>
