<?php $user = current_user(); ?>
<!DOCTYPE html>
  <html lang="en">
    <head>
        <meta name="description" content="Inventory management System">
    <meta name="author" content="Team Saccoma">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title><?php if (!empty($page_title))
           echo remove_junk($page_title);
            elseif(!empty($user))
           echo ucfirst($user['name']);
            else echo "SEPM Team 18 Project";?>
    </title>
    <meta name="theme-color" content="#39b54a">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="libs/css/final_saccoma.css" />
    <link rel="shortcut icon" href="https://saccoma.cf/favicon.png" type="image/x-icon">
<link rel="icon" href="https://saccoma.cf/favicon.png" type="image/x-icon">
  </head>
  <body>
  <?php  if ($session->isUserLoggedIn(true)): ?>
    <header id="header">
        <style>
            /* ===================================================================
 * # forms
 *
 * ------------------------------------------------------------------- */
fieldset {
    border: none;
}

input[type="email"],
input[type="name"],
input[type="password"],
input[type="number"],
input[type="search"],
input[type="text"],
input[type="tel"],
input[type="url"],
input[type="password"],
textarea,
select {
    display: block;
    height: 6rem;
    padding: 1.5rem 0;
    border: 0;
    outline: none;
    color: #333333;
    font-family: "montserrat-light", sans-serif;
    font-size: 1.4rem;
    line-height: 3rem;
    max-width: 100%;
    background: transparent;
    border-bottom: 2px solid rgba(0, 0, 0, 0.15);
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.cl-custom-select {
    position: relative;
    padding: 0;
}

.cl-custom-select select {
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    margin: 0;
    line-height: 3rem;
    vertical-align: middle;
}

.cl-custom-select select option {
    padding-left: 2rem;
    padding-right: 2rem;
}

.cl-custom-select select::-ms-expand {
    display: none;
}

.cl-custom-select::after {
    border-bottom: 2px solid rgba(0, 0, 0, 0.5);
    border-right: 2px solid rgba(0, 0, 0, 0.5);
    content: '';
    display: block;
    height: 8px;
    width: 8px;
    margin-top: -7px;
    pointer-events: none;
    position: absolute;
    right: 2.4rem;
    top: 50%;
    -webkit-transform-origin: 66% 66%;
    -ms-transform-origin: 66% 66%;
    transform-origin: 66% 66%;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    -webkit-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
}


/* IE9 and below */

.oldie .cl-custom-select::after {
    display: none;
}

textarea {
    min-height: 25rem;
}

input[type="email"]:focus,
input[type="number"]:focus,
input[type="search"]:focus,
input[type="text"]:focus,
input[type="tel"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
textarea:focus,
select:focus {
    color: #000000;
    border-bottom: 2px solid black;
}

label, legend {
    font-family: "montserrat-regular", sans-serif;
    font-size: 1.4rem;
    font-weight: bold;
    margin-bottom: .9rem;
    line-height: 1.714;
    color: #000000;
    display: block;
}

input[type="checkbox"], input[type="radio"] {
    display: inline;
}

label > .label-text {
    display: inline-block;
    margin-left: 1rem;
    font-family: "montserrat-regular", sans-serif;
    font-weight: normal;
    line-height: inherit;
}

label > input[type="checkbox"], 
label > input[type="radio"] {
    margin: 0;
    position: relative;
    top: .15rem;
}


/* ------------------------------------------------------------------- 
 * ## style placeholder text
 * ------------------------------------------------------------------- */
::-webkit-input-placeholder {
    color: #828282;
}

:-moz-placeholder {
    color: #828282;
    /* Firefox 18- */
}

::-moz-placeholder {
    color: #828282;
    /* Firefox 19+ */
}

:-ms-input-placeholder {
    color: #828282;
}

.placeholder {
    color: #828282 !important;
}


/* ------------------------------------------------------------------- 
 * ## change autocomplete styles in chrome
 * ------------------------------------------------------------------- */
input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus input:-webkit-autofill,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover textarea:-webkit-autofill:focus,
select:-webkit-autofill,
select:-webkit-autofill:hover,
select:-webkit-autofill:focus {
    -webkit-text-fill-color: #39b54a;
    transition: background-color 5000s ease-in-out 0s;
}



/* ===================================================================
 * # buttons
 *
 * ------------------------------------------------------------------- */
.btn,
button,
input[type="submit"],
input[type="reset"],
input[type="button"] {
    display: inline-block;
    font-family: "montserrat-medium", sans-serif;
    font-size: 1.2rem;
    text-transform: uppercase;
    letter-spacing: .3rem;
    height: 5.4rem;
    line-height: calc(5.4rem - .4rem);
    padding: 0 3rem;
    margin: 0 .3rem 1.2rem 0;
    color: #000000;
    text-decoration: none;
    text-align: center;
    white-space: nowrap;
    cursor: pointer;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    background-color: #c5c5c5;
    border: .2rem solid #c5c5c5;
}

.btn:hover,
button:hover,
input[type="submit"]:hover,
input[type="reset"]:hover,
input[type="button"]:hover,
.btn:focus,
button:focus,
input[type="submit"]:focus,
input[type="reset"]:focus,
input[type="button"]:focus {
    background-color: #b8b8b8;
    border-color: #b8b8b8;
    color: #000000;
    outline: 0;
}


/* button primary
 * ------------------------------------------------- */

.btn.btn--primary,
button.btn--primary,
input[type="submit"].btn--primary,
input[type="reset"].btn--primary,
input[type="button"].btn--primary {
    background: #39b54a;
    border-color: #39b54a;
    color: #FFFFFF;
}

.btn.btn--primary:hover,
button.btn--primary:hover,
input[type="submit"].btn--primary:hover,
input[type="reset"].btn--primary:hover,
input[type="button"].btn--primary:hover,
.btn.btn--primary:focus,
button.btn--primary:focus,
input[type="submit"].btn--primary:focus,
input[type="reset"].btn--primary:focus,
input[type="button"].btn--primary:focus {
    background: #33a242;
    border-color: #33a242;
}


/* button modifiers
 * ------------------------------------------------- */

.btn.full-width, button.full-width {
    width: 100%;
    margin-right: 0;
}

.btn--medium, button.btn--medium {
    height: 5.7rem !important;
    line-height: calc(5.7rem - .4rem) !important;
}

.btn--large, button.btn--large {
    height: 6rem !important;
    line-height: calc(6rem - .4rem) !important;
}

.btn--stroke, button.btn--stroke {
    background: transparent !important;
    border: 0.2rem solid #39b54a;
    color: #39b54a;
}

.btn--stroke:hover, button.btn--stroke:hover {
    border: 0.2rem solid #000000;
    color: #000000;
}

.btn--pill, button.btn--pill {
    padding-left: 3rem !important;
    padding-right: 3rem !important;
    border-radius: 1000px !important;
}

button::-moz-focus-inner, input::-moz-focus-inner {
    border: 0;
    padding: 0;
}

        </style>
      <div class="logo pull-left">SACCOMA</div>
      <div class="header-content">
      <div class="header-date pull-left">
        <strong><?php echo date("F j, Y, g:i a");?></strong>
      </div>
      <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">
            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
              <img src="uploads/users/<?php echo $user['image'];?>" alt="user-image" class="img-circle img-inline">
              <span><?php echo remove_junk(ucfirst($user['name'])); ?> <i class="caret"></i></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                  <a href="profile.php?id=<?php echo (int)$user['id'];?>">
                      <i class="glyphicon glyphicon-user"></i>
                      Profile
                  </a>
              </li>
             <li>
                 <a href="edit_account.php" title="edit account">
                     <i class="glyphicon glyphicon-cog"></i>
                     Settings
                 </a>
             </li>
             <li class="last">
                 <a href="logout.php">
                     <i class="glyphicon glyphicon-off"></i>
                     Logout
                 </a>
             </li>
           </ul>
          </li>
        </ul>
      </div>
     </div>
    </header>
    <div class="sidebar">
      <?php if($user['user_level'] === '1'): ?>
        <!-- admin menu -->
      <?php include_once('admin_menu.php');?>

      <?php elseif($user['user_level'] === '2'): ?>
        <!-- Special user -->
      <?php include_once('special_menu.php');?>

      <?php elseif($user['user_level'] === '3'): ?>
        <!-- User menu -->
      <?php include_once('user_menu.php');?>

      <?php endif;?>

   </div>
<?php endif;?>

<div class="page">
  <div class="container-fluid" style="padding-top: -35px;
    padding-right: -15px;
    padding-bottom: -20px;
    padding-right: 270px;">
