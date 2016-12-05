<?php
  class registrationformview {
     public function getHTML() {
       $form = '
           <form action="/~la95/buildingTools/index.php?controller=registraionController" method="post">

             <div>
	         <label for="username">Username::</label>
	         <input type="text" id="username" name="username" />
	     </div>
	     <div>
	         <label for="model">Password:</label>
	         <input type="text" id="password" name="password" />
	     </div>
	     <div>
	     	<label for="email">Email:</label>
		<input type="text" id="email" name="email" />
	    </div>

            <div class="button">
	         <button type="submit">Save</button>
            </div>
	   </form>

	   ';
        return $form;
     }
  }
