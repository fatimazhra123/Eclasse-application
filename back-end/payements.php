<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="payements.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/3a3f417346.js" crossorigin="anonymous" defer></script>
    <title>payement</title>

</head>


<body>

    <main>
        <?php include 'sidbar2.php';   ?>
        <!-- NAVBAR -->

        <?php include 'navbar2.php ';   ?>
        <!-- tableaux -->

        <div class="payment bg-light">
            <h3 class="text-capitalize">payment details</h3>
            <div class="btn-icons">
                <div class="icons"><i class="fas fa-angle-up text-info fs-6 me-3"></i><br><i
                        class="fas fa-angle-down text-info fs-6 me-3"></i></div>
            </div>
        </div>


        <div class="container-fluid table-responsive bg-light">
            <table class="table table-border" style="width: 80% ;">
                <thead>
                    <tr class="table">
                        <th scope="col">Name</th>
                        <th scope="col">Payment Schedule</th>
                        <th scope="col">Bill Number</th>
                        <th scope="col">Amount Paid</th>
                        <th scope="col">Balance amount</th>
                        <th scope="col">Date </th>

                    </tr>
                </thead>
                <tbody>



                    <?php

                             
$payment =array( 
  'Name'  =>'Karthime',
  'Payment Schedule' =>'First',
  'Bill Number' =>'00012223',
  'Amount Paid' =>'DHS 100,000',
  'Balance amount' =>'DHS 500,000',
  'Date'=>'05-Jan, 2022',
   'icon'=>'<i class="far fa-eye text-info"></i>'


);




for($i=0;$i<4;$i++){
 echo"<tr>  
 <td>".$payment['Name'] ."</td>
 <td>". $payment['Payment Schedule']."</td>
 <td>".$payment['Bill Number']."</td>
 <td>".$payment['Amount Paid']."</td>
 <td>".$payment['Balance amount']."</td>
 <td>".$payment['Date']."</td>
 <td>".$payment['icon']."</td>

 </tr>";
}

        
?>

                </tbody>
            </table>
        </div>



    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>


</html>