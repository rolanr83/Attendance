<?php 
    $title = 'Index';

    require_once 'includes/header.php';
    require_once 'db/conn.php';

    $results = $crud->getSpecialties();

?>
     
<h1 class="text-center">Online Doctor Appointment Booking System </h1>
    
<form method="post" action="success.php" enctype="multipart/form-data">
        
    <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>

        <div class="mb-3">
        <label for="haddress" class="form-label">Home Address</label>
        <input type="text" class="form-control" id="haddress" name="haddress"> 
        <div id="haddress" class="form-text">We'll never share your address with anyone else.</div>
    </div> 
  
    <div class="mb-3">
        <label for="specialty" class="form-label">Medical Doctors</label>
        <select class="form-control" aria-label="specialty" name="specialty">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name']; ?></option>
                <?php }?>
            </select>
            <div id="emailHelp" class="form-text">Choose your doctor.</div>
    </div>   

    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    
    <div class="mb-3">
        <label for="phone" class="form-label">Contact Number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
        <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
    </div> 

    <div class="custom-file">
            <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" >
            <label class="custom-file-label" for="avatar">Choose File</label>
            <small id="avatar" class="form-text text-danger">File Upload is Optional</small>
        </div>
    
      <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
<br>
<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>