<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
    rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ url('css/login.css') }}">

<div class="registration-form">
    <form>
        <div class="form-icon">
            <span><i class="icon icon-user"></i></span>
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" id="username" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control item" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="confirm password" class="form-control item" id="password" placeholder="confirm password">
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" id="phone-number" placeholder="Phone Number">
        </div>
        <div class="form-group">
            <input type="date" class="form-control item" id="birth-date" placeholder="DOB">
        </div>
        <div class="form-group">
            <select class="form-control item" id="email" placeholder="Email">
                <option value="Select">Select </option>
<option value="Select">Employer </option>
<option value="Select">Job seeker</option>

            </select>
        </div>
        <div class="form-group">
            
            <button type="button" class="btn btn-block create-account">Create Account</button>
        </div>

      
    
    
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
</script>
<script src="scripts/js/login.js"></script>
