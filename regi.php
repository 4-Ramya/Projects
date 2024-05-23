<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
   
<style>
body{
background-color:silver;
}
form{
  font: 18px Arial,italic;
}
</style> 

</head>
<body>
<font color="green"><p><center><h4>Register Now</h4></center></p></font>
<div class="p-3" >
<div class = "d-flex justify-content-center align-items-center">

<form  name="myform" id="forms"class = "shadow w-450 p-3" action = "sql.php" method = "POST" onsubmit="return validateform() ||  validateemail() || validatenumber()" >
    <i class="fa fa-user" aria-hidden="true"></i>
    <label for="validationCustom01" class="form-label ">Name</label>
    <input type="text" class="form-control" id="validationCustom01" name="name" >

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
<label  class="form-label mt-3">Mobile Number</label>
    <input type="tel" class="form-control "  name="number">
      <i class="fa fa-envelope" aria-hidden="true"></i>
    <label  class="form-label mt-3">Email</label>
    <div class="input-group mb-3">
     
      <span class="input-group-text" >@</span>
      <input type="text" class="form-control" "  name="email"  required>
    
    </div>
 

    <label class="form-label mt-3">Address:</label><br><br>
    <textarea rows=5 cols=20 name="Address"></textarea><br><br>
    
 


    <label  class="form-label mt-3">State</label>
    <select class="form-select"  name="state" required>
      <option selected >Choose...</option>
      <option>Andhrapradesh</option>
      <option>Telangana</option>
      <option>Tamilnadu</option>
      <option>Others</option>
    </select>
    

 
    <label  class="form-label mt-3">City</label>
    <input type="text" class="form-control"  name="city"required>
  
  
    <label class="form-label mt-3">pincode</label>
    <input type="text" class="form-control" name="pincode" required>
   
  
    <label  class="form-label mt-3">Vegetables</label>
    <select class="form-select" name="select" >
      <option selected >Different vegetables</option>
   <option>Onion </option>
      <option>Potato</option>
      <option>Tomato</option>
      <option>Carrot</option>
        <option>Ladies finger</option>
          <option>Ridge guard</option>
            <option>Garlic</option>
            <option>Beans</option>
    </select>
  
    <div class="form-check">
      <input class="form-check-input mt-4" type="checkbox" value=""  required>
      <label class="form-check-label" >
        <div class="mt-3">Agree to terms and conditions</div>
      </label>
      
    </div>
 <center> <button class="btn btn-success mt-3" type="submit">Submit form</button></center>
  </div>
</div>
</div>
  </form>
<center> <a class="btn btn-white text-success px-3 mb-5" type="submit" href="hom.php">Go Back</a></center>
  </body>
<a href = "index.php">login here</a>
<script>
    forms.addEventListener('submit',(e)=>{
	
		
		//e.preventDefault();
		validateform();
              validateemail();
		   validatenumber();
	})
	function validateform()
	{  
		var name=document.myform.name.value.trim();
                
		  
  
		if (name==null || name=="" )	
		{  
			alert("Name can't be blank");  
  			return false;  
		}
		
 	} 
        function validateemail()  
	{  
		var x=document.myform.email.value;  
		var atposition=x.indexOf("@"); 
		 
		var dotposition=x.lastIndexOf(".");  
		if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
		{  
  			alert("Please enter a valid e-mail address");  
  			return false;  
 		 }  
	}
       function validatenumber()
       {
                 var y=document.myform.number.value;
                 if(y.length==10)
                 {
                        return true;
                 }
                 else
                 {
                     alert("enter correct number");
                 }
        }	
</script>
  </html>
