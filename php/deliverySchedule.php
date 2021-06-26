<?php
    require_once 'init.php';
    require_once 'adminSession.php';

    insertSchedule();

    deleteSchedule();
    F_deleteAllSchedule();

    if(isset($_POST['submit']))
    {
        $getHeader = $_POST['getHeaderTitle'];
        $headerTitle = new headerTitle($getHeader);
        $headerTitle->addHeadTitle();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/deliveryScheduleStyle.css" style="text/css">
    <script src="https://kit.fontawesome.com/5caef3d764.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid p-0">
    <div class="display-4 p-4 shadow bg-light"><a href="adminPage.php"><i class="fas fa-arrow-left"></i></a> Delivery Schedule</div>
    </div>
     
      <div class="wrapper">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success mt-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Schedule</button>
       
        <form action="" method="post">
            <button name="btn_deleteAllSchedule" type="submit" class="btn btn-danger mt-4">Clear Schedule</button>
        </form>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Schedule</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    
                <form action="" method="post">
                <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Header Title</label>
                        <input name="getHeaderTitle" type="text" class="form-control"
                        value="<?php $viewTitle = new viewHeaderTitle();
                                $viewTitle->viewHeader();
                            ?>">
                        <div id="emailHelp" class="form-text">Example: March - 2nd Week Schedule</div>
                    </div> 
                    <label class="form-label"><strong>Ship Via</strong></label>
                    <select name="shipVia" class="form-select" aria-label="Default select example">
                        <option selected>Select...</option>
                        <option value="Car">Car</option>
                        <option value="Motorcycle">Motorcycle</option>
                        <option value="Bike">Bike</option>
                        <option value="Walk">Walk</option>
                    </select>
                    <br>
                    <label class="form-label"><strong>Delivery Days</strong></label>
                    <select name="deliveryDays" class="form-select" aria-label="Default select example">
                        <option selected>Select...</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option> 
                    </select>
                    <br>
                    <label class="form-label"><strong>Start - End Time</strong></label>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <select name="startTime" class="form-select" aria-label="Default select example">
                                    <option selected>Select...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option> 
                                    <option value="8">8</option> 
                                    <option value="9">9</option> 
                                    <option value="10">10</option> 
                                    <option value="11">11</option> 
                                    <option value="12">12</option> 
                                </select>
                            </div>

                            <div class="col">
                                <label class="form-label"><strong>A.M</strong></label>
                            </div>
                            <label class="form-label"><strong>to</strong></label>
                            <div class="col">
                                <select name="endTime" class="form-select" aria-label="Default select example">
                                    <option selected>Select...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option> 
                                    <option value="8">8</option> 
                                    <option value="9">9</option> 
                                    <option value="10">10</option> 
                                    <option value="11">11</option> 
                                    <option value="12">12</option> 
                                </select>
                            </div>
                            <div class="col mb-5">
                                <label class="form-label"><strong>P.M</strong></label>
                            </div>
                    
                        </div>
                    </div>
                    <div class="modal-footer">
            
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button name="submit" type="submit" class="btn btn-success">Confirm</button>
                
                

    </div>
                </form>
            </div>
            
            </div>
        </div>
        </div>
        
        <div class="schedule ">
            <?php 
                $view = new viewScheduleasAdmin();
                $view->viewSched();
            ?>
        </div>
      </div>
    



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="../js/bootstrap.min.js"></script>


</body>
</html>