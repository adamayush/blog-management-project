<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rock Paper Scissor</title>
    <link rel="stylesheet" href="rps.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<meta charset="utf-8">
<script type="text/javascript">

  $(document).ready(function(){
    $("#click").click(function() {
$("#getchoice").val(Math.floor(Math.random()*(4-1+1)));

});
});
</script>
  </head>
  <body>
   <form action="color.php" method="post">   
    <main class="container">
  
      <!-- CONTAINER FOR YOUR INPUT -->
      <section class="teams you winning">
        <div class="select-wrapper">
          <!-- your label -->
          <h1 class="label">You</h1>
          <!-- score -->
          <h2 class="score" id="playerScore"><?php echo $_COOKIE['user'];?></h1>
          <!-- select option -->
         
          <select class="" name="myChoice">
            <option value="0">Select Value</option>
            <option value="1" id="rock">Rock</option>
            <option value="2" id="paper">Paper</option>
            <option value="3" id="scissors">scissors</option>
          </select>
             <button class="get-score" id="click">Play</button>

        </div>
      </section>
      <!-- CONTAINER FOR COMPUTER INPUT -->
      <section class="teams computer loosing">
        <div class="select-wrapper">
        
          <h1 class="label">Computer</h1>
         <h2 class="score" id="computerScore"><?php echo $_COOKIE['computer'];?></h1>
          <select class="disable" id="getchoice" name="compChoice">
            <option value="0"></option>
            <option value="1">Rock</option>
            <option value="2">Paper</option>
            <option value="3">scissors</option>
          </select>
        </div>
      </section>
    </main>
 </form>

        </body>
</html>