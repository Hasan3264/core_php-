<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   <title>Document</title>
</head>
   <body>
       <div id="page-wrap" class="col-lg-6 m-auto">
      <h1>PHP - Simple Calculator Program</h1>
        <form action="result.php" method="post" id="quiz-form">
               <p>
                   <input type="number" name="first_num" id="first_num" value="" /> <b>First Number</b>
               </p>
               <p>
                   <input type="number" name="second_num" id="second_num"  value="" /> <b>Second Number</b>
               </p>
             
            <button type="submit" name="add" class="btn btn-primary">add</button>
            <button type="submit" name="sub" class="btn btn-primary">sub</button>
            <button type="submit" name="mul" class="btn btn-primary">mult</button>
            <button type="submit" name="div" class="btn btn-primary">div</button>
            
        </form>
       </div>
</body>
</html>