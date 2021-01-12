<?php include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

$sql = "SELECT COUNT(id) As count1 FROM star";
$result = mysqli_query($db,$sql);
$row1 = mysqli_fetch_assoc($result);
$numR = $row1['count1'];

$sql1 = "SELECT SUM(rate_index) AS total FROM star";

$rData = mysqli_query($db,$sql1);
$row = mysqli_fetch_assoc($rData);
$total = $row['total'];

$avg = $total/$numR;

?>  

<?php include("../errors.php");
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk - Tailor</title>
  <link rel="shortcut icon" href="../logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
</head>

<body>

  

  <div class="fd-container-box">
    <i class="fas fa-star fa-2x" data-index="0"></i>
    <i class="fas fa-star fa-2x" data-index="1"></i>
    <i class="fas fa-star fa-2x" data-index="2"></i>
    <i class="fas fa-star fa-2x" data-index="3"></i>
    <i class="fas fa-star fa-2x" data-index="4"></i>
    <br>
    <?php echo round($avg)?>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

  <script>
    var ratedIndex=-1, uID=0;

    $(document).ready(function(){
      resetStarColors();

      if(localStorage.getItem('ratedIndex')!= null)
      {
        setStars(parseInt(localStorage.getItem('ratedIndex')));
        uID = localStorage.getItem('uID');
      }

      $('.fa-star').on('click',function (){

        ratedIndex = parseInt($(this).data('index'));
        localStorage.setItem('ratedIndex',ratedIndex); 
        saveToTheDB();

      });

      $('.fa-star').mouseover(function (){

        resetStarColors();
        var currentIndex = parseInt($(this).data('index'));
        setStars(currentIndex);

      });

      $('.fa-star').mouseleave(function (){

        resetStarColors();
        if(ratedIndex!=-1)
        {
          setStars(ratedIndex);
        }
          
      });

    });

    function saveToTheDB(){
      $.ajax({
        url: "rating.php",
        method: "POST",
        dataType: 'json',
        data: 
        {
          save: 1,
          uID: uID,
          ratedIndex: ratedIndex
        }, 
        success: function(r)
        {
          uID = r.id;
          localStorage.setItem('uID',uID);
        }
      });
    }
    

    function setStars(max){
      for(var i=0; i<= max; i++)
        $('.fa-star:eq('+i+')').css('color','yellow');
    }

    function resetStarColors(){
      $('.fa-star').css('color','black');
    }


  </script>

  <?php require("../footer.php")?>

</body>
</html>
