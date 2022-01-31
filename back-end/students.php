<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="students.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/3a3f417346.js" crossorigin="anonymous" defer></script>
    <title>students</title>


</head>

<body>
    <!-- sid_bar -->

    <?php include 'sidbar2.php';   ?>
    <!-- navbar -->

    <?php include './nav-bar3.php ';   ?>
    <!-- tableau -->
    <div id="page-content-wrapper">

        <div class="container-fluid px-3 mt-4">
            <div class="table-responsive">
                <table class="table table-borderless payments">




                    <table class="table table-borderless" style="width: 100%;">
                        <thead>
                            <tr class="table">
                                <th scope="col"></th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Enroll Number</th>
                                <th scope="col">Date of admission</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                             
                             $student =array( 
                               'img'=>'  <img src="img_student.png" alt="pic" />',
                               'Name'  =>'Uername',
                               'Email' =>'user@gmail.com',
                               'Phone' =>'12333445',
                               'Enroll Number' =>'123456789',
                               'Date of admission' =>'08-DEC,2021',
                               'icon1'=>' <i class="fas fa-pen mx-4 text-info "></i>',
                                'icon2'=>' <i class="fas fa-trash text-info "></i>'
                        
                            
                       
                             );
                       
                       
                             for($i=0;$i<6;$i++){
                              echo"<tr>   
                            
                              <td>".$student['img']."</td>
                              <td>".$student['Name'] ."</td>
                              <td>". $student['Email']."</td>
                              <td>".$student['Phone']."</td>
                              <td>".$student['Enroll Number']."</td>
                              <td>".$student['Date of admission']."</td>
                              <td>".$student['icon1']."</td>
                              <td>".$student['icon2']."</td>
                           
                              </tr>";
                           }



                             ?>

                        </tbody>
                    </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

</body>


</html>