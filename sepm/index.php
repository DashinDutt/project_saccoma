<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="login-page" style="opacity:0.79;">
    <div class="text-center">
       <h1>Welcome</h1>
       <style>
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


/* =================================================================== 
 * # additional components
 *
 * ------------------------------------------------------------------- */


/* ------------------------------------------------------------------- 
 * ## alert box
 * ------------------------------------------------------------------- */
.alert-box {
    padding: 2.1rem 4rem 2.1rem 3rem;
    position: relative;
    margin-bottom: 3rem;
    border-radius: 3px;
    font-family: "montserrat-regular", sans-serif;
    font-size: 1.5rem;
    line-height: 1.6;
}

.alert-box__close {
    position: absolute;
    right: 1.8rem;
    top: 1.8rem;
    cursor: pointer;
}

.alert-box__close.fa {
    font-size: 12px;
}

.alert-box--error {
    background-color: #ffd1d2;
    color: #e65153;
}

.alert-box--success {
    background-color: #c8e675;
    color: #758c36;
}

.alert-box--info {
    background-color: #d7ecfb;
    color: #4a95cc;
}

.alert-box--notice {
    background-color: #fff099;
    color: #bba31b;
}


/* ------------------------------------------------------------------- 
 * ## additional typo styles 
 * ------------------------------------------------------------------- */


/* drop cap 
 * ----------------------------------------------- */
.drop-cap:first-letter {
    float: left;
    margin: 0;
    padding: 1.5rem .6rem 0 0;
    font-size: 8.4rem;
    font-family: "montserrat-regular", sans-serif;
    font-weight: bold;
    line-height: 6rem;
    text-indent: 0;
    background: transparent;
    color: #000000;
}


/* line definition style 
 * ----------------------------------------------- */
.lining dt, .lining dd {
    display: inline;
    margin: 0;
}

.lining dt + dt:before, .lining dd + dt:before {
    content: "\A";
    white-space: pre;
}

.lining dd + dd:before {
    content: ", ";
}

.lining dd + dd:before {
    content: ", ";
}

.lining dd:before {
    content: ": ";
    margin-left: -0.2em;
}


/* dictionary definition style 
 * ----------------------------------------------- */
.dictionary-style dt {
    display: inline;
    counter-reset: definitions;
}

.dictionary-style dt + dt:before {
    content: ", ";
    margin-left: -0.2em;
}

.dictionary-style dd {
    display: block;
    counter-increment: definitions;
}

.dictionary-style dd:before {
    content: counter(definitions, decimal) ". ";
}


/** 
 * Pull Quotes
 * -----------
 * markup:
 *
 * <aside class="pull-quote">
 *		<blockquote>
 *			<p></p>
 *		</blockquote>
 *	</aside>
 *
 * --------------------------------------------------------------------- */

       </style>
       <p>Sign in to start your session</p>
     </div>
     <?php echo display_msg($msg); ?>
    
      <form method="post" action="auth.php" class="clearfix">
        
           
              <label for="username" class="control-label">Username</label>
             
                   
              <input type="name" class="full-width" name="username" placeholder="Username">
        
       
            <label for="Password" class="control-label">Password</label>
            
            <input type="password" name= "password"  class="full-width" placeholder="password">
            
        
       <div style="padding-top:10px;padding-bottom:20px;">
           
                <button type="submit" class="btn btn--stroke full-width">Login</button>
                </div>
        
    
    </div>
</div>
<?php include_once('layouts/footer.php'); ?>
