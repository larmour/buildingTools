<?php
  class carformview {
     public function getHTML() {
       $form = '
           <form action="/~la95/ProjectTwo/index.php?controller=carController" method="post">

             <div>
	         <label for="make">Make:</label>
	         <input type="text" id="make" name="make" />
	     </div>
	     <div>
	         <label for="model">Model:</label>
	         <input type="text" id="model" name="model" />
	     </div>
	     <div class="button">
	        <button type="submit">Save</button>
	     </div>
	   </form>

	   ';
        return $form;
     }
  }
